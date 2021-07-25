
<x-layout>
    <x-admin-table :name="'Posts Table'">
        <tr>
            <th>id</th>
            <th>author</th>
            <th>category</th>
            <th>header</th>
            <th>body</th>
            <th>actions</th>
        </tr>

        @foreach($posts as $post)
            <tr>

                <td>{{$post->id}}</td>
                <td><a href="/admin/user/edit/{{$post->author->id}}">{{$post->author->name}}</a></td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->header}}</td>
                <td>{{$post->body}}</td>
                <td><a href="/admin/post/edit/{{$post->id}}">Edit</a> <a href="/post/delete/{{$post->id}}">Delete</a></td>

            </tr>
        @endforeach
    </x-admin-table>
</x-layout>

