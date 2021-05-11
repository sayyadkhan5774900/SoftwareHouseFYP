<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Order extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const STATUS_SELECT = [
        'approved' => 'Approved',
        'refuse'   => 'Refuse',
    ];

    public const SERVICE_SELECT = [
        'graphic_designing'      => 'Graphic Designing',
        'website_development'    => 'Website Development',
        'product_photography'    => 'Product Photography',
        'event_management'       => 'Event Management',
        'social_media_marketing' => 'Social Media Marketing',
    ];

    public $table = 'orders';

    protected $appends = [
        'file',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service',
        'description',
        'address',
        'city',
        'postcode',
        'contact',
        'meeting',
        'client_id',
        'service_provider_id',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getFileAttribute()
    {
        return $this->getMedia('file')->last();
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function service_provider()
    {
        return $this->belongsTo(User::class, 'service_provider_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
