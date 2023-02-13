<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ldap extends Model
{
    use HasFactory;

    protected $table = 'ldap';

    protected $fillable = [
        'ldap_server',
        'ldap_port',
        'ldap_version',
        'ldap_domain',
        'ldap_user',
        'ldap_password',
        'ldap_status',
        'action_by',
    ];
}
