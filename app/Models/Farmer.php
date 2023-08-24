<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmers';
    protected $primaryKey = 'id';
    protected $fillable = ['groupname','county', 'subcounty', 'location','firstname','middlename', 'lastname', 'dob', 'village', 'mobile', 'maritalStatus', 'idnumber', 'occupation', 'incomeSource','monthlyincome', 'children','under5', 'children6to11', 'children12to18', 'landstatus', 'landsize', 'cropgrown', 'marketaccess', 'wateraccess', 'lastcrop', 'animal', 'cropearnings', 'projectland', 'projecttime', 'pumpkin','geolocation','photo', 'terms'];
    use HasFactory;
}
