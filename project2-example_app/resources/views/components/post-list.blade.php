<div>
    <input type="text" wire:model.debounce.300ms="search" placeholder="Tìm kiếm bài viết...">

    <table>
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Ngày đăng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>
