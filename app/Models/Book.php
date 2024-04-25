use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
