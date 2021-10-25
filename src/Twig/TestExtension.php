<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TestExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('firstWord', [$this, 'firstWord']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('makeBtn', [$this, 'makeBtn']),
        ];
    }

///////////////////////////////////////////////////////////////////

    public function firstWord($texte)
    {   

        $words = explode(" ", $texte)[0];

        $words = str_replace('.','',$words);
        $words = str_replace(',','',$words);
        $words = str_replace('?','',$words);
        $words = str_replace(':','',$words);
        $words = str_replace('!','',$words);

        return($words); 
    }

    public function makeBtn($name, $type)
    {
        switch ($type) 
        {
                case 'primary':
                    print ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                case 'secondary':
                    echo ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                case 'success':
                    print ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                case 'danger':
                    print ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                case 'warning':
                    print ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                case 'info':
                    print ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                case 'dark':
                    print ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                case 'light':
                    print ('<button type="button" class="btn btn-'.$type.'">'.$name.'</button>');
                break;

                default :
                    print('<button type="button" class="btn btn-link">'.$name.'</button>');
                break;
        }
    }
}
