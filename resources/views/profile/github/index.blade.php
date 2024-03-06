<x-profile-layout>
    <x-slot name="title">{{ __('Usuários Github') }}</x-slot>

    <div class="container-xxl flex-grow-1 container-p-y">
        <header class="col-md-6 px-0"><h4 class="fw-bold py-3"><span
                    class="text-muted fw-light">Melhores Usuários do Github</span></h4>
        </header>
        <x-shared.flash-msg/>

        <div class="card mb-5">
            @can('github_users_update')
            <h5 class="card-header">
                <a href="{{route('profile.github.update.users')}}"
                                       class="btn btn-outline-success"><i
                        class='bx bx-git-repo-forked'></i> Atualizar usuários</a>
                <small style="font-size: 0.75rem;"> &nbsp; Usuários: {{$total}}</small></h5>
            @endcan

            <div class="table-responsive text-nowrap">

                <table class="table  table-striped table-bordered">
                    <thead>
                    <tr class="text-nowrap">
                        <th scope="col" width="7%">#ID</th>
                        <th scope="col" width="10%">Foto</th>
                        <th scope="col" width="20%">Nome</th>
                        <th scope="col" width="16%">Repositório com + stars</th>
                        <th scope="col" width="17%"><img src="/images/star.png" alt="" style="width: 16px;"> &nbsp;
                            Stars
                        </th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse( $repositories as $repository )
                        <tr>
                            <th scope="row">{{$repository->id}}</th>
                            <td><a href="{{$repository->owner_url}}" target="_blank"><img
                                        src="{{$repository->owner_avatar}}"
                                        alt="Ir para o perfil de {{$repository->owner}}"
                                        title="Ir para o perfil de {{$repository->owner}}"
                                        class="rounded-circle avatar-post-list"></a>
                            </td>
                            <td><a href="{{$repository->owner_url}}"
                                   target="_blank">{{ Str::limit($repository->owner, 70) }}</a></td>
                            <td><a href="{{$repository->html_url}}" target="_blank"
                                   title="{{$repository->html_url}}">{{ Str::limit($repository->html_url, 30) }}</a>
                            </td>
                            <td><img src="/images/star.png" alt="" style="width: 16px;">
                                &nbsp; {{$repository->stargazers_count}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">{{__('No users')}}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

            </div>

        </div>
        {{ $repositories->links() }}
    </div>

    <x-slot name="css">{{--<style>CSS</style>--}}</x-slot>
    <x-slot name="js">{{--<script>JS</script>--}}</x-slot>
</x-profile-layout>
