<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyServiceRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Gate;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MyServicesController extends Controller
{
   
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('my_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $services = Service::where('provider_id',auth()->user()->id)->with(['media'])->paginate(10);

        return view('admin.myServices.index', compact('services'));
    }


    public function store(StoreServiceRequest $request)
    {

        $count = Service::where('provider_id',auth()->user()->id)->count();

        if($count >= 5){
            return redirect()->route('admin.my-services.index')->withErrors(['max serives', 'You can not CREATE more than five serives']);
        }

        $service = Service::create($request->all());
        
        $service->update([
            'provider_id' => auth()->user()->id,
        ]);

        if ($request->input('file', false)) {
            $service->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $service->id]);
        }

        return redirect()->route('admin.my-services.index');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service = Service::find($id);

        return view('admin.myServices.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, $id)
    {

        $service = Service::find($id);

        $service->update($request->all());

        if ($request->input('file', false)) {
            if (!$service->file || $request->input('file') !== $service->file->file_name) {
                if ($service->file) {
                    $service->file->delete();
                }
                $service->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
            }
        } elseif ($service->file) {
            $service->file->delete();
        }

        return redirect()->route('admin.my-services.index');
    }

    public function show($id)
    {
        abort_if(Gate::denies('service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service = Service::find($id);

        return view('admin.myServices.show', compact('service'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service = Service::find($id);

        $service->delete();

        return back();
    }

    public function massDestroy(MassDestroyServiceRequest $request)
    {
        Service::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('service_create') && Gate::denies('service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Service();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

}
