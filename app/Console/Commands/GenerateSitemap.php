<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the landing part of the application';

    public function handle()
    {
        $sitemap = Sitemap::create()
            // Home Page
            ->add(Url::create('/')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0)
            )
            // Sejarah
            ->add(Url::create('/sejarah')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // Visi Misi
            ->add(Url::create('/visi-misi')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // Akreditasi
            ->add(Url::create('/akreditasi')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // Fasilitas
            ->add(Url::create('/fasilitas')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // Berita
            ->add(Url::create('/berita')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
            )
            // Pengumuman
            ->add(Url::create('/pengumuman')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
            )
            // Pengabdian Masyarakat
            ->add(Url::create('/pengabdian-masyarakat')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // Penelitian
            ->add(Url::create('/penelitian')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            );

        // Get all posts and filter by type
        $posts = Post::all();
        
        foreach ($posts as $post) {
            $url = Url::create("/{$post->getTypeLabelSlug()}/{$post->slug}")
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7);

            // Add URLs based on the type of post
            if ($post->type == 'news') {
                $sitemap->add($url->setUrl('/berita/' . $post->slug));
            } elseif ($post->type == 'announcement') {
                $sitemap->add($url->setUrl('/pengumuman/' . $post->slug));
            } elseif ($post->type == 'community_service') {
                $sitemap->add($url->setUrl('/pengabdian-masyarakat/' . $post->slug));
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated!');
    }
}
