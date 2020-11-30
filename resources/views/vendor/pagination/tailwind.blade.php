@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="d-flex justify-content-center py-2">



                <!--

                <nav class="d-flex justify-content-center py-2">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><span>&laquo;</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#"><span>&raquo;</span></a></li>
                  </ul>
                </nav>

                -->

                    <ul class="pagination">
                        {{-- Previous Page Link --}}

                        @if ($paginator->onFirstPage())
                            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                <span class="" aria-hidden="true">
                                    <svg class="" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        @else


                            <li class="page-item"><a class="page-link"href="{{ $paginator->previousPageUrl() }}" rel="prev" class="" aria-label="{{ __('pagination.previous') }}"><span>&laquo;</span></a></li>

                        @endif


                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                    <li class="page-item"><a class="page-link" href="{{ $element }}">{{ $element }}</a></li>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                            <li class="page-item"> <span aria-current="page">

                                                <span class="page-link">{{ $page }}</span>

                                                </span></li>
                                    @else
                                            <li class="page-item">
                                                <a href="{{ $url }}"
                                               aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                    <span class="page-link">{{ $page }}</span>
                                                </a></li>
                                    @endif

                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}

                        @if ($paginator->hasMorePages())


                                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('pagination.next') }}"><span>&raquo;</span></a></li>

                            @else
                            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">


                            </span>
                        @endif

                    </ul>

    </nav>
@endif
