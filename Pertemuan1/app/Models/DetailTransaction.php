<?php

// Ryan Gusman Yoel Banjarnahor 6706220098

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'transactionId',
        'collectionId',
        'tanggalKembali',
        'status',
        'keterangan',
    ];
}