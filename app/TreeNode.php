<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreeNode extends Model
{
    protected $fillable = [
        'credits_left',
        'credits_right',
        'username',
    ];

    public function childLeft()
    {
        return $this->belongsTo(TreeNode::class, 'left_child_id', 'id');
    }

    public function childRight()
    {
        return $this->belongsTo(TreeNode::class, 'right_child_id', 'id');
    }

    public function parentFromLeft()
    {
        return $this->hasOne(TreeNode::class, 'id', 'left_child_id');
    }

    public function parentFromRight()
    {
        return $this->hasOne(TreeNode::class, 'id', 'right_child_id');
    }

    public function parent() {
        return $this->parentFromLeft->merge($this->parentFromRight);
    }

    public function scopeRoot($query)
    {
        return $query->where('is_root', true);
    }
}
