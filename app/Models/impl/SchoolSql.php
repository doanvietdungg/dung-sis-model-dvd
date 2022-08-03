<?php
/**
 * @Author Edogawa Conan
 * @Date   Aug 04, 2022
 */

namespace DungDV\SisModel\App\Models\impl;

use DungDV\SisModel\App\Models\School;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;

class SchoolSql extends Model implements School
{
    use HasFactory;

    protected $fillable
        = [
            'type', 'name', 'description', 'school_id',
            'class_id', 'group', 'start', 'end',
            'is_all_day', 'repeat', 'timezone'
        ];

    protected $table = self::table;

    protected $connection = 'mysql';
}
