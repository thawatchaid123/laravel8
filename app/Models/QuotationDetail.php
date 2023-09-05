<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class QuotationDetail extends Model
{
    use HasFactory; 

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quotation_details';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['quotation_id', 'product_id', 'amount', 'price', 'total', 'remark'];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class,'quotation_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

}
