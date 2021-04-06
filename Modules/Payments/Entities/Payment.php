<?php

namespace Modules\Payments\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Investments\Entities\Investment;

class Payment extends Model
{
   // use HasFactory;

    protected $fillable = [];

    protected $table = 'payments';

  /*  protected static function newFactory()
    {
        return \Modules\Payments\Database\factories\PaymentFactory::new();
    }*/

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function investment(){
        return $this->belongsTo(Investment::class,'investment_id');
    }
}
