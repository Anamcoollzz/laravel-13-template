<?php

namespace App\Models;

use App\Helpers\StringHelper;
use App\Traits\UserTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\Appends;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

#[Fillable([
    'name',
    'email',
    'avatar',
    'email_verified_at',
    'password',
    'last_login',
    'email_token',
    'verification_code',
    'is_locked',
    'phone_number',
    'birth_date',
    'address',
    'last_password_change',
    'twitter_id',
    'file_upload',
    'wrong_login',
    'is_active',
    'created_by_id',
    'last_updated_by_id',
    'blocked_reason',
    'deleted_at',
    'deleted_by_id',
    'last_seen_at',
    'is_anonymous',
    'gender',
    'nik',
    'uuid',
    'is_majalengka',
    'province_code',
    'city_code',
    'district_code',
    'village_code',
    'photo',

    // student
    'nis',
    'nisn',
    'religion_id',
    'religion_id',
    'rt',
    'rw',
    'postal_code',
    'school_class_id',
    'school_class_id',
    'room',
    'father_nik',
    'father_name',
    'father_birth_date',
    'father_education',
    'father_work_id',
    'father_work_id',
    'father_income',
    'mother_nik',
    'mother_name',
    'mother_birth_date',
    'mother_education',
    'mother_work_id',
    'mother_work_id',
    'mother_income',
    'guardian_nik',
    'guardian_name',
    'guardian_birth_date',
    'guardian_education',
    'guardian_work_id',
    'guardian_work_id',
    'guardian_income',
    'class_level_id',

    // teacher
    'teacher_nuptk',
    'teacher_mother_name',
    'teacher_employee_status',
    'teacher_gtk_type',
    'teacher_position',

    'education_level_id',
    'semester_id',
    'school_year_id',

    // siaga desa
    'dusun_rt_rw',
])]
#[Appends(['avatar_url', 'is_online', 'age'])]
class User extends Authenticatable implements JWTSubject
{
    use HasFactory, HasRoles, Notifiable, UserTrait;

    const GENDER_MALE = 'Laki-laki';

    const GENDER_FEMALE = 'Perempuan';

    const GENDER_OTHER = 'Tidak Mau Menyebutkan';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_seen_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's age.
     */
    public function getAgeAttribute(): ?int
    {
        return $this->birth_date ? (new Carbon($this->birth_date))->age : null;
    }

    /**
     * Scope a query to only include female users.
     */
    public function scopeIsFemale(Builder $query): Builder
    {
        return $query->where('gender', self::GENDER_FEMALE);
    }

    /**
     * Scope a query to only include male users.
     */
    public function scopeIsMale(Builder $query): Builder
    {
        return $query->where('gender', self::GENDER_MALE);
    }

    /**
     * Scope a query to only include users of a given age range.
     */
    public function scopeAge1018(): Builder
    {
        return $this->whereBetween('birth_date', [now()->subYears(18), now()->subYears(10)]);
    }

    /**
     * Scope a query to only include users of a given age range.
     */
    public function scopeAge1925(): Builder
    {
        return $this->whereBetween('birth_date', [now()->subYears(25), now()->subYears(18)]);
    }

    /**
     * Scope a query to only include users of a given age range.
     */
    public function scopeAge2650(): Builder
    {
        return $this->whereBetween('birth_date', [now()->subYears(50), now()->subYears(25)]);
    }

    /**
     * Scope a query to only include users of a given age range.
     */
    public function scopeAge511000(): Builder
    {
        return $this->whereBetween('birth_date', [now()->subYears(1000), now()->subYears(51)]);
    }

    /**
     * add custom column name to hide real name if is_anonymous is true
     */
    public function getNameAttribute(string $value): string
    {
        if ($this->is_anonymous) {
            return 'Anonymous';
        }

        return $value;
    }

    /**
     * add custom column is online
     */
    public function getIsOnlineAttribute(): bool
    {
        return $this->last_seen_at ? $this->last_seen_at->isAfter(now()->subMinutes(5)) : false;
    }

    /**
     * add custom column avatar url
     */
    public function getAvatarUrlAttribute(): string
    {
        if ($this->avatar) {
            if (StringHelper::isUrl($this->avatar)) {
                return $this->avatar;
            }
            if (Storage::exists('public/avatars/' . $this->avatar)) {
                return asset('storage/avatars/' . $this->avatar);
            }
        }

        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=random&size=128';

        return null;
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     */
    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     */
    public function getJWTCustomClaims(): array
    {
        return [];
    }

    /**
     * Get the user that deleted the model.
     */
    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by_id');
    }

    /**
     * Get the faculty leader associated with the User.
     */
    public function facultyLeader(): HasOne
    {
        return $this->hasOne(FacultyLeader::class);
    }

    /**
     * Get the student associated with the User.
     */
    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }

    /**
     * Scope a query to only include Majalengka residents.
     */
    public function scopeMajalengkaResidents(Builder $query): Builder
    {
        return $query->where('is_majalengka', true);
    }

    /**
     * Scope a query to only include non-Majalengka residents.
     */
    public function scopeNonMajalengkaResidents(Builder $query): Builder
    {
        return $query->where('is_majalengka', false);
    }

    /**
     * Get the region associated with the User's province.
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'province_code', 'code');
    }

    /**
     * Get the region associated with the User's province.
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'province_code', 'code');
    }

    /**
     * Get the region associated with the User's city.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'city_code', 'code');
    }

    /**
     * Get the region associated with the User's district.
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'district_code', 'code');
    }

    /**
     * Get the region associated with the User's village.
     */
    public function village(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'village_code', 'code');
    }

    /**
     * Get the religion associated with the User.
     */
    public function religion(): BelongsTo
    {
        return $this->belongsTo(Religion::class);
    }

    /**
     * Get the school class associated with the User.
     */
    public function schoolclass(): BelongsTo
    {
        return $this->belongsTo(SchoolClass::class, 'school_class_id');
    }

    /**
     * Get the father's work associated with the User.
     */
    public function fatherwork(): BelongsTo
    {
        return $this->belongsTo(Work::class, 'father_work_id');
    }

    /**
     * Get the mother's work associated with the User.
     */
    public function motherwork(): BelongsTo
    {
        return $this->belongsTo(Work::class, 'mother_work_id');
    }

    /**
     * Get the guardian's work associated with the User.
     */
    public function guardianwork(): BelongsTo
    {
        return $this->belongsTo(Work::class, 'guardian_work_id');
    }

    /**
     * Get the education level associated with the User.
     */
    public function educationlevel(): BelongsTo
    {
        return $this->belongsTo(EducationLevel::class, 'education_level_id');
    }

    /**
     * Get the class level associated with the User.
     */
    public function classlevel(): BelongsTo
    {
        return $this->belongsTo(ClassLevel::class, 'class_level_id');
    }

    /**
     * Get the semester associated with the User.
     */
    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    /**
     * Get the school year associated with the User.
     */
    public function schoolyear(): BelongsTo
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }
}
