<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Validator;
use App\AdminModel;

class UserModel extends Model
{
    protected $table = 'table_user_crud';

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

    public $timestamps = false;

    protected $validation;

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

    public function admin()
    {
        return $this->belongsTo(AdminModel::class, 'user_id');
    }

}
