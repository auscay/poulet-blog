<x-single-layout>

    @include('partials._hero')

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @unless ($posts->isEmpty())
            @foreach ($posts as $post)
                                
          <tr>
            <th scope="row">1</th>
            <td>{{$post->title}}</td>
            <td><a href="/posts/{{$post->id}}/edit" type="submit" name="submit" class="btn btn-primary btn-block">Edit Post<i class="zmdi zmdi-mail-send ms-2"></i></a></td>
            <td><form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('DELETE')
                <button type="submit" name="submit" class="btn btn-primary btn-block">Delete<i class="zmdi zmdi-delete ms-2"></i></button>
            </form></td>
          </tr>
          @endforeach
          @else
          <tr>
            <td>
                <p>No post found</p>
            </td>
          </tr>
          @endunless

        </tbody>
      </table>
</x-single-layout>