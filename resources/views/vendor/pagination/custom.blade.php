@if ($paginator->hasPages())
<style>
.center {
    float: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #2eca6a;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

<div class="center">
    <div class="pagination">

        @if ($paginator->onFirstPage())
        <a >&laquo;</a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
               {{ $element }}
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                       <a class="active">{{ $page }}</a>
                    @else
                       <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
        <a>&raquo;</a>
        @endif

    </div>
</div>

@endif 