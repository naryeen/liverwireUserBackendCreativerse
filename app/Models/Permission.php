<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelsPermission;


class Permission extends ModelsPermission
{
    use HasFactory;
//     Permission::create(['name' => 'Create Post']);
// Permission::create(['name' => 'View Post']);
// Permission::create(['name' => 'Update Post']);
// Permission::create(['name' => 'Delete Post']);
}
