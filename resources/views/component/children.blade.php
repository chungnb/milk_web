<section
    class="elementor-section elementor-top-section elementor-element elementor-element-7e3d651 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="7e3d651" data-element_type="section" id="homebox-1">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c3043a4"
            data-id="c3043a4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-ed6153b pr-0 elementor-hidden-phone elementor-widget elementor-widget-wp-widget-maxmegamenu"
                    data-id="ed6153b" data-element_type="widget" data-widget_type="wp-widget-maxmegamenu.default">
                    <div class="elementor-widget-container">
                        <h5>danh mục</h5>
                        <div id="mega-menu-wrap-menu-1" class="mega-menu-wrap">
                            <div class="mega-menu-toggle">
                                <div class="mega-toggle-blocks-left">
                                    <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-1'
                                        id='mega-toggle-block-1'><button aria-label="Toggle Menu"
                                            class="mega-toggle-animated mega-toggle-animated-slider" type="button"
                                            aria-expanded="false">
                                            <span class="mega-toggle-animated-box">
                                                <span class="mega-toggle-animated-inner"></span>
                                            </span>
                                        </button></div>
                                </div>
                                <div class="mega-toggle-blocks-center"></div>
                                <div class="mega-toggle-blocks-right"></div>
                            </div>
                            <ul id="mega-menu-menu-1" class="mega-menu max-mega-menu mega-menu-vertical mega-no-js"
                                data-event="hover" data-effect="fade_up" data-effect-speed="200"
                                data-effect-mobile="disabled" data-effect-speed-mobile="0"
                                data-mobile-force-width="body" data-second-click="go" data-document-click="collapse"
                                data-vertical-behaviour="standard" data-breakpoint="600" data-unbind="true"
                                data-mobile-state="collapse_all" data-hover-intent-timeout="300"
                                data-hover-intent-interval="100">
                                @foreach($categories as $cate)
                                <li
                                    class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-align-bottom-left mega-menu-flyout mega-has-icon mega-icon-left'>
                                    <a style="text-transform: uppercase;" class="mega-custom-icon mega-menu-link"
                                        href="">
                                        {{ $cate['name'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9be0b5c"
            data-id="9be0b5c" data-element_type="column" style="width: 100%;">
            <h1>
                @if(!empty($category))
                <a href="">
                    {{ $category[0]['name'] }}
                </a>
                @else
                <span>Danh mục</span>
                @endif
            </h1>
        </div>
    </div>
</section>