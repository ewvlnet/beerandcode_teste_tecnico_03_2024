<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function index()
    {
        $repositories = Repository::query()->where('owner_type', 'User')->orderBy('stargazers_count', 'DESC')->paginate(10);
        $total = $repositories->total();

        return view('profile.github.index', compact('repositories', 'total'));
    }

    public function updateUsers()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('GITHUB_TOKEN'),
        ])->get('https://api.github.com/search/repositories?q=language:php+python&type:user&sort=stars&order=desc&per_page=100');

        $repositories = collect($response->json()['items'])->map(function ($item) {
            return [
                'name' => $item['name'],
                'full_name' => $item['full_name'],
                'html_url' => $item['html_url'],
                'description' => $item['description'],
                'stargazers_count' => $item['stargazers_count'],
                'owner' => $item['owner']['login'],
                'owner_url' => $item['owner']['html_url'],
                'owner_avatar' => $item['owner']['avatar_url'],
                'owner_type' => $item['owner']['type'],
            ];
        });

        Repository::truncate();

        $repository = Repository::upsert($repositories->toArray(),
            ['full_name', 'name', 'html_url', 'description', 'stargazers_count', 'owner', 'owner_url', 'owner_avatar', 'owner_type']);

        return redirect()->route('profile.github.index');
    }

}
