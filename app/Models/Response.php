<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = ['team_id', 'question_id', 'answer_text', 'answer_id', 'is_correct'];
}
