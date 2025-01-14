<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Storage;

class Quote extends Model
{
    use Commentable;
    use Recommendable;

    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get a string path for the quote.
     *
     * @return string
     */
    public function path()
    {
        return "/quotes/{$this->author->slug}/{$this->id}";
    }

    /**
     * A quote is assigned to an author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(QuoteAuthor::class, 'author_id');
    }

    /**
     * A quote belongs to a creator (user that generated the original quote submission).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * A quote belongs to an updating user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * A quote belongs to an approving user (editor that approved the quote from submissions table).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    /**
     * Get all of the quote's graphics.
     */
    public function graphics()
    {
        return $this->morphMany('App\Graphic', 'graphicable');
    }

    /**
     * Create the standard red instagram image for the quote.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function makeBasicInstagram()
    {
        $datetime = date('ynj-Gis');
        $quote = '"'.$this->quote_text.'"';
        $length = strlen($quote);
        $fontsize = 75;
        $char_per_line=floor(31);

        if ($length < 260) {
            //Red Instagram
            $img = Image::make(public_path('img/templates/instagram-red.jpg'));
            if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 150; $spacer = 80; }
            $string = wordwrap($quote,$char_per_line,"|");
            $strings = explode("|",$string);
            $i = 1;
            foreach($strings as $string){
                $img->text($string, 540, $top, function($font) {
                    $font->file(public_path('fonts/Roboto-Medium.ttf'));
                    $font->size(65);
                    $font->color('#ffffff');
                    $font->align('center');
                    $font->valign('top');
                });
                $top=ceil($top+($fontsize*1.10)); //shift top postition down
            }
            $top = $top + $spacer;
            $img->text("-".$this->author->display_name, 1000, $top, function($font) {
                $font->file(public_path('fonts/RockSalt.ttf'));
                $font->size(45);
                $font->color('#ffffff');
                $font->align('right');
                $font->valign('top');
            });
            $img->text('.com/'.$this->id, 162, 1048, function($font) {
                $font->file(public_path('fonts/Roboto-Medium.ttf'));
                $font->size(34);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('bottom');
            });
            $path_prefix = 'quotes/instagram';
            $color = 'red';
            $filename = $this->author->slug.'-'.$this->id.'-'.$color.'-'.$datetime.'.jpg';
            $this->addGraphic($img, $filename, $path_prefix, $color);

            //Grey Instagram
            $img = Image::make(public_path('img/templates/instagram-grey.jpg'));
            if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 150; $spacer = 80; }
            $string = wordwrap($quote,$char_per_line,"|");
            $strings = explode("|",$string);
            $i = 1;
            foreach($strings as $string){
                $img->text($string, 540, $top, function($font) {
                    $font->file(public_path('fonts/Roboto-Medium.ttf'));
                    $font->size(65);
                    $font->color('#ffffff');
                    $font->align('center');
                    $font->valign('top');
                });
                $top=ceil($top+($fontsize*1.10)); //shift top postition down
            }
            $top = $top + $spacer;
            $img->text("-".$this->author->display_name, 1000, $top, function($font) {
                $font->file(public_path('fonts/RockSalt.ttf'));
                $font->size(45);
                $font->color('#ffffff');
                $font->align('right');
                $font->valign('top');
            });
            $img->text('.com/'.$this->id, 162, 1048, function($font) {
                $font->file(public_path('fonts/Roboto-Medium.ttf'));
                $font->size(34);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('bottom');
            });
            $path_prefix = 'quotes/instagram';
            $color = 'grey';
            $filename = $this->author->slug.'-'.$this->id.'-'.$color.'-'.$datetime.'.jpg';
            $this->addGraphic($img, $filename, $path_prefix, $color);

            //Black Instagram
            $img = Image::make(public_path('img/templates/instagram-black.jpg'));
            if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 150; $spacer = 80; }
            $string = wordwrap($quote,$char_per_line,"|");
            $strings = explode("|",$string);
            $i = 1;
            foreach($strings as $string){
                $img->text($string, 540, $top, function($font) {
                    $font->file(public_path('fonts/Roboto-Medium.ttf'));
                    $font->size(65);
                    $font->color('#ffffff');
                    $font->align('center');
                    $font->valign('top');
                });
                $top=ceil($top+($fontsize*1.10)); //shift top postition down
            }
            $top = $top + $spacer;
            $img->text("-".$this->author->display_name, 1000, $top, function($font) {
                $font->file(public_path('fonts/RockSalt.ttf'));
                $font->size(45);
                $font->color('#ffffff');
                $font->align('right');
                $font->valign('top');
            });
            $img->text('.com/'.$this->id, 162, 1048, function($font) {
                $font->file(public_path('fonts/Roboto-Medium.ttf'));
                $font->size(34);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('bottom');
            });
            $path_prefix = 'quotes/instagram';
            $color = 'black';
            $filename = $this->author->slug.'-'.$this->id.'-'.$color.'-'.$datetime.'.jpg';
            $this->addGraphic($img, $filename, $path_prefix, $color);

            //Blue Instagram
            $img = Image::make(public_path('img/templates/instagram-blue.jpg'));
            if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 150; $spacer = 80; }
            $string = wordwrap($quote,$char_per_line,"|");
            $strings = explode("|",$string);
            $i = 1;
            foreach($strings as $string){
                $img->text($string, 540, $top, function($font) {
                    $font->file(public_path('fonts/Roboto-Medium.ttf'));
                    $font->size(65);
                    $font->color('#ffffff');
                    $font->align('center');
                    $font->valign('top');
                });
                $top=ceil($top+($fontsize*1.10)); //shift top postition down
            }
            $top = $top + $spacer;
            $img->text("-".$this->author->display_name, 1000, $top, function($font) {
                $font->file(public_path('fonts/RockSalt.ttf'));
                $font->size(45);
                $font->color('#ffffff');
                $font->align('right');
                $font->valign('top');
            });
            $img->text('.com/'.$this->id, 162, 1048, function($font) {
                $font->file(public_path('fonts/Roboto-Medium.ttf'));
                $font->size(34);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('bottom');
            });
            $path_prefix = 'quotes/instagram';
            $color = 'blue';
            $filename = $this->author->slug.'-'.$this->id.'-'.$color.'-'.$datetime.'.jpg';
            $this->addGraphic($img, $filename, $path_prefix, $color);

        } else {
            //Large Quote Instagram
            $img = Image::make(public_path('img/templates/instagram-red.jpg'));
            $fontsize = 45;
            $char_per_line=46;
            if ($length < 400) { $top = 150; $spacer = 80; } elseif ($length > 600) { $top = 50; $spacer = 40; } else { $top = 100; $spacer = 80; }
            $string = wordwrap($quote,$char_per_line,"|");
            $strings = explode("|",$string);
            $i = 1;
            foreach($strings as $string){
                $img->text($string, 540, $top, function($font) {
                    $font->file(public_path('fonts/Roboto-Medium.ttf'));
                    $font->size(45);
                    $font->color('#ffffff');
                    $font->align('center');
                    $font->valign('top');
                });
                $top=ceil($top+($fontsize*1.20)); //shift top postition down
            }
            $top = $top + $spacer;
            $img->text("-".$this->author->display_name, 1000, $top, function($font) {
                $font->file(public_path('fonts/RockSalt.ttf'));
                $font->size(40);
                $font->color('#ffffff');
                $font->align('right');
                $font->valign('top');
            });
            $img->text('.com/'.$this->id, 162, 1048, function($font) {
                $font->file(public_path('fonts/Roboto-Medium.ttf'));
                $font->size(34);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('bottom');
            });
            $path_prefix = 'quotes/instagram';
            $color = 'longred';
            $filename = $this->author->slug.'-'.$this->id.'-'.$color.'-'.$datetime.'.jpg';
            $this->addGraphic($img, $filename, $path_prefix, $color);
        }
    }

    /**
     * Add graphic to the quote.
     *
     * @param $reply
     */
    public function addGraphic($img, $filename, $path_prefix, $color)
    {
        Storage::disk('gcs-command')->put($path_prefix.'/'.$filename , $img->stream(), 'public');
        $graphic = new Graphic([
                'filename' => $filename,
                'path_prefix' => $path_prefix,
                'mime' => 'jpg',
                'width' => $img->width(),
                'height' => $img->height(),
                'background_color' => $color,
                'image_type_id' => 6,
                'headshot_id' => NULL,
                'created_by' => 1,
                'updated_by' => 1
            ]);
        $this->graphics()->save($graphic);
    }

    /**
     * Return popular quotes to display in quotes section sidebar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public static function popular()
    {
        return static::whereIn('author_id', [4, 5, 6, 7, 8, 9, 10, 11])->inRandomOrder()->limit(5)->get();
    }

}
