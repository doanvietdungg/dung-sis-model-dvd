<?php
/**
 * @Author Edogawa Conan
 * @Date   Aug 04, 2022
 */

namespace DungDV\SisModel\App\Models\impl;

use DungDV\SisModel\App\Models\School;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SchoolSql extends Model implements School
{
    use HasFactory;

    protected $fillable
        = [
            'name', 'address'
        ];

    protected $table = self::table;

    protected $connection = 'mysql';
}
