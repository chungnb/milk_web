<section
    class="elementor-section elementor-top-section elementor-element elementor-element-54a0f50 row elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="54a0f50" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-d5d27f7"
            data-id="d5d27f7" data-element_type="column">
            <div>
                <div id="img-s">
                    @foreach($img as $i)
                    <div id="img-in" class="elementor-widget-container">
                        <a href="{{route('layouts.img.img')}}">
                            @if($i->image)
                            <img src="{{ asset('storage/' . $i->image) }}" alt="{{ $i->title }}" width="100%">
                            @else
                            No Image
                            @endif
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
#img-s {
    margin-top: 10px;
    display: flex;
    flex-wrap: nowrap;
    gap: 5px;
    justify-content: flex-start;
    overflow-x: auto;
}

#img-in {
    flex: 0 0 auto;
    width: 275px;
    height: auto;
}

#img-in img {
    width: 100%;
    height: auto;
    display: block;
}
</style>