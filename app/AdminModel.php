<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Validator;
use App\UserModel;

class AdminModel extends Model
{
    protected $table = 'table_admin_crud';

    protected $fillable = array(
      'id',
      'name',
      'email',
      'password',
      'user_id'
    );

    protected $hidden = [
      'password', 'remember_token'
    ];

    protected $validation;

    public $timestamps = false;

    public function getValidation()
    {
      $this->validation = $validation;
    }

    public function isValidation($validation)
    {
      $this->validation = $validation;
      $validation->setRules([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'password' => 'required|max:60'
      ]);
      $validation->setData([$this->getAttributes]);
      if($validation->fails()) {
        $this->errors = $validator->errors();
        return false;
      }
    }

    public function user ()
    {
        $this->hasOne('App\UserModel');
    }
}
