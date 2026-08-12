<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Appends;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

#[Fillable([
    'from_user_id',
    'to_user_id',
    'message',
    'category',
    'file_path',
    'is_read',
    'read_at',
    'deleted_at',
])]
#[Appends(['time', 'side', 'avatar', 'is_left', 'file_url'])]
#[Table('chat_messages')]
class ChatMessage extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'message' => 'string',
        ];
    }

    /**
     * Get the file URL for the chat message.
     */
    public function getFileUrlAttribute(): ?string
    {
        if ($this->file_path) {
            return url(Storage::url($this->file_path));
        }

        return null;
    }

    /**
     * Determine whether the message should render on the left side.
     */
    public function getIsLeftAttribute(): bool
    {
        return $this->from_user_id !== auth_user()->id;
    }

    /**
     * Get the avatar URL for the message.
     */
    public function getAvatarAttribute(): string
    {
        if ($this->side === 'right') {
            return auth_user()->avatar_url;
            if ($this->fromUser && $this->fromUser->avatar_url) {
                return $this->fromUser->avatar_url;
            }

            return url('stisla').'/assets/img/avatar/avatar-1.png';
        }
        if ($this->toUser && $this->toUser->avatar_url) {
            // dd($this->toUser->avatar_url);
            return $this->toUser->avatar_url;
        }

        // Return a default avatar or implement logic to fetch user avatar
        return url('stisla').'/assets/img/avatar/avatar-3.png';
    }

    /**
     * Get the message side for the current user.
     */
    public function getSideAttribute(): string
    {
        return $this->from_user_id === auth_user()->id ? 'right' : 'left';
    }

    /**
     * Get the formatted message time.
     */
    public function getTimeAttribute(): string
    {
        if ($this->created_at->format('Y-m-d') !== now()->format('Y-m-d')) {
            return $this->created_at->format('d M Y H:i:s');
        }

        return $this->created_at->format('H:i:s');
    }

    // Define relationships, accessors, or other model methods as needed
    /**
     * Get the sender of the message.
     */
    public function fromUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    /**
     * Get the recipient of the message.
     */
    public function toUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

    const CATEGORY_CURHAT = 'curhat';

    const CATEGORY_KELUHAN_PENYAKIT = 'keluhan-penyakit';

    const CATEGORY_PERTANYAAN_LAINNYA = 'pertanyaan-lainnya';
}
