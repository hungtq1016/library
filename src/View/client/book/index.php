<div class="l-container">
    <header class="page-header">
        <h1 class="page-header__title">Tìm Kiếm Sách</h1>
        <h2 class="page-header__subtitle">Tra cứu tài liệu và sách.</h2>
    </header>

    <div class="tags-panel">

        <div class="tags">
            <?php 
                $category = new Category_M();
                $store = $category->storeClient();
                while($set = $store->fetch()):
            ?>
            <a href="#" class="tag"><?php echo $set['category_name']?></a>
            <?php endwhile ?>
            <a href="#" class="tag" style="color:#ec1d25;border-color:#ec1d25">Xem Thêm</a>
        </div>
    </div>


    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/9320/biggest-books-of-november.html">Biggest Books of November</a>
            </h3>

            <p class="shelf__description">Fall into these great reads!</p>

            <a href="collections/9320/biggest-books-of-november.html" class="shelf__link">
                See all 70 titles <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">

            <div class="title-result" data-isbn="9079564">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/9079564/the-light-we-carry.html" data-ga-action="cover"
                        data-ga-title="The Light We Carry" data-id="9079564" aria-label="The Light We Carry">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image5bc0?title=The%20Light%20We%20Carry" srcset=""
                            alt="cover image of The Light We Carry" data-ga-action="cover"
                            data-title="The Light We Carry" data-id="9079564"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image5bc0?title=The%20Light%20We%20Carry';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/9079564/the-light-we-carry.html" data-ga-action="cover"
                            data-title="The Light We Carry" data-id="9079564">
                            The Light We Carry
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Michelle Obama · Michelle Obama (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8769276">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/8769276/going-rogue.html" data-ga-action="cover" data-ga-title="Going Rogue"
                        data-id="8769276" aria-label="Going Rogue">


                        <img not-data-src="Content/img/load.gif" src="media/default-cover-image3f88?title=Going%20Rogue"
                            srcset="" alt="cover image of Going Rogue" data-ga-action="cover" data-title="Going Rogue"
                            data-id="8769276"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image3f88?title=Going%20Rogue';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8769276/going-rogue.html" data-ga-action="cover" data-title="Going Rogue"
                            data-id="8769276">
                            Going Rogue
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Janet Evanovich · Lorelei King (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="7872134">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/7872134/friends-lovers-and-the-big-terrible-thing.html" data-ga-action="cover"
                        data-ga-title="Friends, Lovers, and the Big Terrible Thing" data-id="7872134"
                        aria-label="Friends, Lovers, and the Big Terrible Thing">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image610d?title=Friends%2C%20Lovers%2C%20and%20the%20Big%20Terrible%20Thing"
                            srcset="" alt="cover image of Friends, Lovers, and the Big Terrible Thing"
                            data-ga-action="cover" data-title="Friends, Lovers, and the Big Terrible Thing"
                            data-id="7872134"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image610d?title=Friends%2C%20Lovers%2C%20and%20the%20Big%20Terrible%20Thing';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/7872134/friends-lovers-and-the-big-terrible-thing.html" data-ga-action="cover"
                            data-title="Friends, Lovers, and the Big Terrible Thing" data-id="7872134">
                            Friends, Lovers, and the Big Terrible Thing
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Matthew Perry · Matthew Perry (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8839068">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/8839068/desert-star.html" data-ga-action="cover" data-ga-title="Desert Star"
                        data-id="8839068" aria-label="Desert Star">


                        <img not-data-src="Content/img/load.gif" src="media/default-cover-image1ff2?title=Desert%20Star"
                            srcset="" alt="cover image of Desert Star" data-ga-action="cover" data-title="Desert Star"
                            data-id="8839068"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image1ff2?title=Desert%20Star';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8839068/desert-star.html" data-ga-action="cover" data-title="Desert Star"
                            data-id="8839068">
                            Desert Star
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Michael Connelly (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="9086551">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/9086551/the-seven-moons-of-maali-almeida-winner-of-the-booker-pr.html"
                        data-ga-action="cover"
                        data-ga-title="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                        data-id="9086551"
                        aria-label="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imagec251?title=The%20Seven%20Moons%20of%20Maali%20Almeida%3A%20Winner%20of%20the%20Booker%20Prize%202022"
                            srcset=""
                            alt="cover image of The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                            data-ga-action="cover"
                            data-title="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                            data-id="9086551"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagec251?title=The%20Seven%20Moons%20of%20Maali%20Almeida%3A%20Winner%20of%20the%20Booker%20Prize%202022';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/9086551/the-seven-moons-of-maali-almeida-winner-of-the-booker-pr.html"
                            data-ga-action="cover"
                            data-title="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                            data-id="9086551">
                            The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Shehan Karunatilaka (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="7345836">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/7345836/bloodmarked.html" data-ga-action="cover" data-ga-title="Bloodmarked"
                        data-id="7345836" aria-label="Bloodmarked">


                        <img not-data-src="Content/img/load.gif" src="media/default-cover-imagee689?title=Bloodmarked"
                            srcset="" alt="cover image of Bloodmarked" data-ga-action="cover" data-title="Bloodmarked"
                            data-id="7345836"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagee689?title=Bloodmarked';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/7345836/bloodmarked.html" data-ga-action="cover" data-title="Bloodmarked"
                            data-id="7345836">
                            Bloodmarked
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Tracy Deonn · Joniece Abbott-Pratt (2022)</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-ad ad-one adbutler-ad">

        <div id="placement_542088_0"></div>
    </div>
    <div class="horizontal-ad ad-two adbutler-ad mobile">
        <!-- Explore Tab - Mobile Banner [async] -->

        <div id="placement_542089_0"></div>
    </div>

    <div class="l-row">
        <div class="featured-collections-panel">
            <header class="collections-panel__header">
                <h3 tabindex="0">Featured Collections</h3>
            </header>

            <div class="featured-collections-table">
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/888960/get-the-picture.html">Get The Picture!</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="6093095">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/6093095/the-smart-cookie.html" data-ga-action="cover"
                                    data-ga-title="The Smart Cookie" data-id="6093095" aria-label="The Smart Cookie">


                                    <img not-data-src="/Content/img/load.gif"
                                        src="media/default-cover-image576b?title=The%20Smart%20Cookie" srcset=""
                                        alt="cover image of The Smart Cookie" data-ga-action="cover"
                                        data-title="The Smart Cookie" data-id="6093095"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image576b?title=The%20Smart%20Cookie';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8729112">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8729112/some-bodies.html" data-ga-action="cover"
                                    data-ga-title="Some Bodies" data-id="8729112" aria-label="Some Bodies">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageffae?title=Some%20Bodies" srcset=""
                                        alt="cover image of Some Bodies" data-ga-action="cover" data-title="Some Bodies"
                                        data-id="8729112"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageffae?title=Some%20Bodies';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="7575281">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/7575281/thats-not-my-name.html" data-ga-action="cover"
                                    data-ga-title="That's Not My Name!" data-id="7575281"
                                    aria-label="That's Not My Name!">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image67d1?title=That%27s%20Not%20My%20Name%21"
                                        srcset="" alt="cover image of That's Not My Name!" data-ga-action="cover"
                                        data-title="That's Not My Name!" data-id="7575281"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image67d1?title=That%27s%20Not%20My%20Name%21';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8958902">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1" href="collections/888960/get-the-picture.html" data-ga-action="cover"
                                    data-ga-title="Little Blue Truck Makes a Friend: a Friendship Book for Kids"
                                    data-id="8958902"
                                    aria-label="Little Blue Truck Makes a Friend: a Friendship Book for Kids">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imagee66a?title=Little%20Blue%20Truck%20Makes%20a%20Friend%3A%20a%20Friendship%20Book%20for%20Kids"
                                        srcset=""
                                        alt="cover image of Little Blue Truck Makes a Friend: a Friendship Book for Kids"
                                        data-ga-action="cover"
                                        data-title="Little Blue Truck Makes a Friend: a Friendship Book for Kids"
                                        data-id="8958902"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagee66a?title=Little%20Blue%20Truck%20Makes%20a%20Friend%3A%20a%20Friendship%20Book%20for%20Kids';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/888960/get-the-picture.html">
                                See all 31 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link" href="collections/888960/get-the-picture.html">
                        See all 31 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/887942/pack-your-ears-and-fill-up-your-phone-getting-ready-for.html">Pack
                            Your Ears and Fill Up Your Phone: Getting-Ready-for-Disney Reads!</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="9239773">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9239773/disney-princess-beyond-the-tiara-the-stories-the-influen.html"
                                    data-ga-action="cover"
                                    data-ga-title="Disney Princess: Beyond the Tiara: the Stories. the Influence. the Legacy."
                                    data-id="9239773"
                                    aria-label="Disney Princess: Beyond the Tiara: the Stories. the Influence. the Legacy.">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageb658?title=Disney%20Princess%3A%20Beyond%20the%20Tiara%3A%20the%20Stories.%20the%20Influence.%20the%20Legacy."
                                        srcset=""
                                        alt="cover image of Disney Princess: Beyond the Tiara: the Stories. the Influence. the Legacy."
                                        data-ga-action="cover"
                                        data-title="Disney Princess: Beyond the Tiara: the Stories. the Influence. the Legacy."
                                        data-id="9239773"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageb658?title=Disney%20Princess%3A%20Beyond%20the%20Tiara%3A%20the%20Stories.%20the%20Influence.%20the%20Legacy.';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9321613">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9321613/the-disney-animation-renaissance.html" data-ga-action="cover"
                                    data-ga-title="The Disney Animation Renaissance" data-id="9321613"
                                    aria-label="The Disney Animation Renaissance">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image881a?title=The%20Disney%20Animation%20Renaissance"
                                        srcset="" alt="cover image of The Disney Animation Renaissance"
                                        data-ga-action="cover" data-title="The Disney Animation Renaissance"
                                        data-id="9321613"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image881a?title=The%20Disney%20Animation%20Renaissance';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9153307">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9153307/the-unofficial-guide-to-disneyland-2023.html"
                                    data-ga-action="cover" data-ga-title="The Unofficial Guide to Disneyland 2023"
                                    data-id="9153307" aria-label="The Unofficial Guide to Disneyland 2023">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imagef51e?title=The%20Unofficial%20Guide%20to%20Disneyland%202023"
                                        srcset="" alt="cover image of The Unofficial Guide to Disneyland 2023"
                                        data-ga-action="cover" data-title="The Unofficial Guide to Disneyland 2023"
                                        data-id="9153307"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagef51e?title=The%20Unofficial%20Guide%20to%20Disneyland%202023';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9313897">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1"
                                    href="collections/887942/pack-your-ears-and-fill-up-your-phone-getting-ready-for.html"
                                    data-ga-action="cover"
                                    data-ga-title="The Unofficial Guide to Walt Disney World with Kids 2023"
                                    data-id="9313897"
                                    aria-label="The Unofficial Guide to Walt Disney World with Kids 2023">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image2d37?title=The%20Unofficial%20Guide%20to%20Walt%20Disney%20World%20with%20Kids%202023"
                                        srcset=""
                                        alt="cover image of The Unofficial Guide to Walt Disney World with Kids 2023"
                                        data-ga-action="cover"
                                        data-title="The Unofficial Guide to Walt Disney World with Kids 2023"
                                        data-id="9313897"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image2d37?title=The%20Unofficial%20Guide%20to%20Walt%20Disney%20World%20with%20Kids%202023';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/887942/pack-your-ears-and-fill-up-your-phone-getting-ready-for.html">
                                See all 54 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/887942/pack-your-ears-and-fill-up-your-phone-getting-ready-for.html">
                        See all 54 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/886803/australia-and-new-zealands-top-titles-of-november.html">Australia
                            and New Zealand's Top Titles of November</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="9164995">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9164995/clarke.html" data-ga-action="cover" data-ga-title="Clarke"
                                    data-id="9164995" aria-label="Clarke">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image31b8?title=Clarke" srcset=""
                                        alt="cover image of Clarke" data-ga-action="cover" data-title="Clarke"
                                        data-id="9164995"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image31b8?title=Clarke';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9188907">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9188907/murder-in-williamstown.html" data-ga-action="cover"
                                    data-ga-title="Murder in Williamstown" data-id="9188907"
                                    aria-label="Murder in Williamstown">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image630e?title=Murder%20in%20Williamstown" srcset=""
                                        alt="cover image of Murder in Williamstown" data-ga-action="cover"
                                        data-title="Murder in Williamstown" data-id="9188907"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image630e?title=Murder%20in%20Williamstown';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9240697">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9240697/days-end.html" data-ga-action="cover" data-ga-title="Day's End"
                                    data-id="9240697" aria-label="Day's End">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageadc6?title=Day%27s%20End" srcset=""
                                        alt="cover image of Day's End" data-ga-action="cover" data-title="Day's End"
                                        data-id="9240697"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageadc6?title=Day%27s%20End';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8986765">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1"
                                    href="collections/886803/australia-and-new-zealands-top-titles-of-november.html"
                                    data-ga-action="cover" data-ga-title="The Butterfly Collector" data-id="8986765"
                                    aria-label="The Butterfly Collector">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image21a7?title=The%20Butterfly%20Collector" srcset=""
                                        alt="cover image of The Butterfly Collector" data-ga-action="cover"
                                        data-title="The Butterfly Collector" data-id="8986765"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image21a7?title=The%20Butterfly%20Collector';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/886803/australia-and-new-zealands-top-titles-of-november.html">
                                See all 26 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/886803/australia-and-new-zealands-top-titles-of-november.html">
                        See all 26 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/884212/biggest-books-of-november.html">Biggest Books of
                            November</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="8769276">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8769276/going-rogue.html" data-ga-action="cover"
                                    data-ga-title="Going Rogue" data-id="8769276" aria-label="Going Rogue">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image3f88?title=Going%20Rogue" srcset=""
                                        alt="cover image of Going Rogue" data-ga-action="cover" data-title="Going Rogue"
                                        data-id="8769276"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image3f88?title=Going%20Rogue';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8839068">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8839068/desert-star.html" data-ga-action="cover"
                                    data-ga-title="Desert Star" data-id="8839068" aria-label="Desert Star">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image1ff2?title=Desert%20Star" srcset=""
                                        alt="cover image of Desert Star" data-ga-action="cover" data-title="Desert Star"
                                        data-id="8839068"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image1ff2?title=Desert%20Star';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9079564">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9079564/the-light-we-carry.html" data-ga-action="cover"
                                    data-ga-title="The Light We Carry" data-id="9079564"
                                    aria-label="The Light We Carry">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image5bc0?title=The%20Light%20We%20Carry" srcset=""
                                        alt="cover image of The Light We Carry" data-ga-action="cover"
                                        data-title="The Light We Carry" data-id="9079564"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image5bc0?title=The%20Light%20We%20Carry';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="7872134">

                            <div class="opacity-2 type-icon icon-audiobook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1" href="collections/884212/biggest-books-of-november.html"
                                    data-ga-action="cover" data-ga-title="Friends, Lovers, and the Big Terrible Thing"
                                    data-id="7872134" aria-label="Friends, Lovers, and the Big Terrible Thing">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image610d?title=Friends%2C%20Lovers%2C%20and%20the%20Big%20Terrible%20Thing"
                                        srcset="" alt="cover image of Friends, Lovers, and the Big Terrible Thing"
                                        data-ga-action="cover" data-title="Friends, Lovers, and the Big Terrible Thing"
                                        data-id="7872134"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image610d?title=Friends%2C%20Lovers%2C%20and%20the%20Big%20Terrible%20Thing';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/884212/biggest-books-of-november.html">
                                See all 70 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/884212/biggest-books-of-november.html">
                        See all 70 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/880494/love-can-be-a-real-witch.html">Love Can Be a Real
                            Witch</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="8906502">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8906502/witchful-thinking.html" data-ga-action="cover"
                                    data-ga-title="Witchful Thinking" data-id="8906502" aria-label="Witchful Thinking">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image5f29?title=Witchful%20Thinking" srcset=""
                                        alt="cover image of Witchful Thinking" data-ga-action="cover"
                                        data-title="Witchful Thinking" data-id="8906502"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image5f29?title=Witchful%20Thinking';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8324875">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8324875/the-kiss-curse.html" data-ga-action="cover"
                                    data-ga-title="The Kiss Curse" data-id="8324875" aria-label="The Kiss Curse">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image2583?title=The%20Kiss%20Curse" srcset=""
                                        alt="cover image of The Kiss Curse" data-ga-action="cover"
                                        data-title="The Kiss Curse" data-id="8324875"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image2583?title=The%20Kiss%20Curse';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8821648">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8821648/extra-witchy.html" data-ga-action="cover"
                                    data-ga-title="Extra Witchy" data-id="8821648" aria-label="Extra Witchy">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image98f0?title=Extra%20Witchy" srcset=""
                                        alt="cover image of Extra Witchy" data-ga-action="cover"
                                        data-title="Extra Witchy" data-id="8821648"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image98f0?title=Extra%20Witchy';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8916522">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1" href="collections/880494/love-can-be-a-real-witch.html"
                                    data-ga-action="cover" data-ga-title="Back in a Spell" data-id="8916522"
                                    aria-label="Back in a Spell">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image3532?title=Back%20in%20a%20Spell" srcset=""
                                        alt="cover image of Back in a Spell" data-ga-action="cover"
                                        data-title="Back in a Spell" data-id="8916522"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image3532?title=Back%20in%20a%20Spell';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/880494/love-can-be-a-real-witch.html">
                                See all 18 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/880494/love-can-be-a-real-witch.html">
                        See all 18 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/880339/2023-andrew-carnegie-medals-for-excellence-in-fiction-an.html">2023
                            Andrew Carnegie Medals for Excellence in Fiction and Nonfiction- Longlist</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="8822042">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8822042/our-wives-under-the-sea.html" data-ga-action="cover"
                                    data-ga-title="Our Wives Under the Sea" data-id="8822042"
                                    aria-label="Our Wives Under the Sea">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image1bde?title=Our%20Wives%20Under%20the%20Sea"
                                        srcset="" alt="cover image of Our Wives Under the Sea" data-ga-action="cover"
                                        data-title="Our Wives Under the Sea" data-id="8822042"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image1bde?title=Our%20Wives%20Under%20the%20Sea';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="6384175">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/6384175/the-school-for-good-mothers.html" data-ga-action="cover"
                                    data-ga-title="The School for Good Mothers" data-id="6384175"
                                    aria-label="The School for Good Mothers">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imagea2c0?title=The%20School%20for%20Good%20Mothers"
                                        srcset="" alt="cover image of The School for Good Mothers"
                                        data-ga-action="cover" data-title="The School for Good Mothers"
                                        data-id="6384175"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagea2c0?title=The%20School%20for%20Good%20Mothers';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="6480334">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/6480334/trust.html" data-ga-action="cover" data-ga-title="Trust"
                                    data-id="6480334" aria-label="Trust">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image4953?title=Trust" srcset=""
                                        alt="cover image of Trust" data-ga-action="cover" data-title="Trust"
                                        data-id="6480334"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image4953?title=Trust';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="6286952">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1"
                                    href="collections/880339/2023-andrew-carnegie-medals-for-excellence-in-fiction-an.html"
                                    data-ga-action="cover" data-ga-title="Seeking Fortune Elsewhere" data-id="6286952"
                                    aria-label="Seeking Fortune Elsewhere">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image5001?title=Seeking%20Fortune%20Elsewhere"
                                        srcset="" alt="cover image of Seeking Fortune Elsewhere" data-ga-action="cover"
                                        data-title="Seeking Fortune Elsewhere" data-id="6286952"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image5001?title=Seeking%20Fortune%20Elsewhere';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/880339/2023-andrew-carnegie-medals-for-excellence-in-fiction-an.html">
                                See all 42 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/880339/2023-andrew-carnegie-medals-for-excellence-in-fiction-an.html">
                        See all 42 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/879222/fall-nonfiction-spotlight.html">Fall Nonfiction
                            Spotlight</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="8821944">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8821944/abuela-dont-forget-me.html" data-ga-action="cover"
                                    data-ga-title="Abuela, Don't Forget Me" data-id="8821944"
                                    aria-label="Abuela, Don't Forget Me">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image2077?title=Abuela%2C%20Don%27t%20Forget%20Me"
                                        srcset="" alt="cover image of Abuela, Don't Forget Me" data-ga-action="cover"
                                        data-title="Abuela, Don't Forget Me" data-id="8821944"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image2077?title=Abuela%2C%20Don%27t%20Forget%20Me';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8783892">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8783892/aaron-slaters-big-project-book-for-astonishing-artists.html"
                                    data-ga-action="cover"
                                    data-ga-title="Aaron Slater's Big Project Book for Astonishing Artists"
                                    data-id="8783892"
                                    aria-label="Aaron Slater's Big Project Book for Astonishing Artists">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image160b?title=Aaron%20Slater%27s%20Big%20Project%20Book%20for%20Astonishing%20Artists"
                                        srcset=""
                                        alt="cover image of Aaron Slater's Big Project Book for Astonishing Artists"
                                        data-ga-action="cover"
                                        data-title="Aaron Slater's Big Project Book for Astonishing Artists"
                                        data-id="8783892"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image160b?title=Aaron%20Slater%27s%20Big%20Project%20Book%20for%20Astonishing%20Artists';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="4694247">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/4694247/the-accidental-veterinarian-tales-from-a-pet-practice.html"
                                    data-ga-action="cover"
                                    data-ga-title="The Accidental Veterinarian: Tales from a Pet Practice"
                                    data-id="4694247"
                                    aria-label="The Accidental Veterinarian: Tales from a Pet Practice">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image9477?title=The%20Accidental%20Veterinarian%3A%20Tales%20from%20a%20Pet%20Practice"
                                        srcset=""
                                        alt="cover image of The Accidental Veterinarian: Tales from a Pet Practice"
                                        data-ga-action="cover"
                                        data-title="The Accidental Veterinarian: Tales from a Pet Practice"
                                        data-id="4694247"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image9477?title=The%20Accidental%20Veterinarian%3A%20Tales%20from%20a%20Pet%20Practice';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9063839">

                            <div class="opacity-2 type-icon icon-audiobook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1" href="collections/879222/fall-nonfiction-spotlight.html"
                                    data-ga-action="cover" data-ga-title="Abuela, Don't Forget Me" data-id="9063839"
                                    aria-label="Abuela, Don't Forget Me">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image2077?title=Abuela%2C%20Don%27t%20Forget%20Me"
                                        srcset="" alt="cover image of Abuela, Don't Forget Me" data-ga-action="cover"
                                        data-title="Abuela, Don't Forget Me" data-id="9063839"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image2077?title=Abuela%2C%20Don%27t%20Forget%20Me';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/879222/fall-nonfiction-spotlight.html">
                                See all 137 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/879222/fall-nonfiction-spotlight.html">
                        See all 137 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/878314/got-a-minute-try-these-quick-reads.html">Got a Minute?
                            Try These Quick Reads!</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="1395461">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/1395461/fortunately-the-milk.html" data-ga-action="cover"
                                    data-ga-title="Fortunately, the Milk" data-id="1395461"
                                    aria-label="Fortunately, the Milk">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image3365?title=Fortunately%2C%20the%20Milk" srcset=""
                                        alt="cover image of Fortunately, the Milk" data-ga-action="cover"
                                        data-title="Fortunately, the Milk" data-id="1395461"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image3365?title=Fortunately%2C%20the%20Milk';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="8822184">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/8822184/the-tall-stranger.html" data-ga-action="cover"
                                    data-ga-title="The Tall Stranger" data-id="8822184" aria-label="The Tall Stranger">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageaa5c?title=The%20Tall%20Stranger" srcset=""
                                        alt="cover image of The Tall Stranger" data-ga-action="cover"
                                        data-title="The Tall Stranger" data-id="8822184"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageaa5c?title=The%20Tall%20Stranger';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="7679268">

                            <div class=" type-icon icon-audiobook"></div>

                            <div class="title-result__cover ">

                                <a href="media/7679268/the-last-white-man.html" data-ga-action="cover"
                                    data-ga-title="The Last White Man" data-id="7679268"
                                    aria-label="The Last White Man">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageb3c3?title=The%20Last%20White%20Man" srcset=""
                                        alt="cover image of The Last White Man" data-ga-action="cover"
                                        data-title="The Last White Man" data-id="7679268"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageb3c3?title=The%20Last%20White%20Man';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="5285428">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1" href="collections/878314/got-a-minute-try-these-quick-reads.html"
                                    data-ga-action="cover" data-ga-title="The Office of Historical Corrections"
                                    data-id="5285428" aria-label="The Office of Historical Corrections">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imagecd9b?title=The%20Office%20of%20Historical%20Corrections"
                                        srcset="" alt="cover image of The Office of Historical Corrections"
                                        data-ga-action="cover" data-title="The Office of Historical Corrections"
                                        data-id="5285428"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagecd9b?title=The%20Office%20of%20Historical%20Corrections';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/878314/got-a-minute-try-these-quick-reads.html">
                                See all 50 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/878314/got-a-minute-try-these-quick-reads.html">
                        See all 50 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/869658/australia-and-new-zealands-top-titles-of-october.html">Australia
                            and New Zealand's Top Titles of October</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="9158424">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9158424/what-i-cook-when-nobodys-watching.html" data-ga-action="cover"
                                    data-ga-title="What I Cook When Nobody's Watching" data-id="9158424"
                                    aria-label="What I Cook When Nobody's Watching">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image4818?title=What%20I%20Cook%20When%20Nobody%27s%20Watching"
                                        srcset="" alt="cover image of What I Cook When Nobody's Watching"
                                        data-ga-action="cover" data-title="What I Cook When Nobody's Watching"
                                        data-id="9158424"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image4818?title=What%20I%20Cook%20When%20Nobody%27s%20Watching';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9132362">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9132362/a-kind-of-magic.html" data-ga-action="cover"
                                    data-ga-title="A Kind of Magic" data-id="9132362" aria-label="A Kind of Magic">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageded2?title=A%20Kind%20of%20Magic" srcset=""
                                        alt="cover image of A Kind of Magic" data-ga-action="cover"
                                        data-title="A Kind of Magic" data-id="9132362"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageded2?title=A%20Kind%20of%20Magic';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9009016">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/9009016/a-girl-called-corpse.html" data-ga-action="cover"
                                    data-ga-title="A Girl Called Corpse" data-id="9009016"
                                    aria-label="A Girl Called Corpse">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imagec95f?title=A%20Girl%20Called%20Corpse" srcset=""
                                        alt="cover image of A Girl Called Corpse" data-ga-action="cover"
                                        data-title="A Girl Called Corpse" data-id="9009016"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagec95f?title=A%20Girl%20Called%20Corpse';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="9030857">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1"
                                    href="collections/869658/australia-and-new-zealands-top-titles-of-october.html"
                                    data-ga-action="cover" data-ga-title="Self-Care for New Mums" data-id="9030857"
                                    aria-label="Self-Care for New Mums">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image1bc6?title=Self-Care%20for%20New%20Mums" srcset=""
                                        alt="cover image of Self-Care for New Mums" data-ga-action="cover"
                                        data-title="Self-Care for New Mums" data-id="9030857"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image1bc6?title=Self-Care%20for%20New%20Mums';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/869658/australia-and-new-zealands-top-titles-of-october.html">
                                See all 34 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/869658/australia-and-new-zealands-top-titles-of-october.html">
                        See all 34 titles
                    </a>
                </div>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="collections/868949/international-day-of-the-girl.html">International Day of
                            the Girl</a>
                    </h4>

                    <div class="collections-block shelf__row">
                        <div class="title-result" data-isbn="5983118">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/5983118/amari-and-the-night-brothers.html" data-ga-action="cover"
                                    data-ga-title="Amari and the Night Brothers" data-id="5983118"
                                    aria-label="Amari and the Night Brothers">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageb685?title=Amari%20and%20the%20Night%20Brothers"
                                        srcset="" alt="cover image of Amari and the Night Brothers"
                                        data-ga-action="cover" data-title="Amari and the Night Brothers"
                                        data-id="5983118"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageb685?title=Amari%20and%20the%20Night%20Brothers';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="2039287">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/2039287/laurinda.html" data-ga-action="cover" data-ga-title="Laurinda"
                                    data-id="2039287" aria-label="Laurinda">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image0a70?title=Laurinda" srcset=""
                                        alt="cover image of Laurinda" data-ga-action="cover" data-title="Laurinda"
                                        data-id="2039287"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image0a70?title=Laurinda';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="6658816">

                            <div class=" type-icon icon-ebook"></div>

                            <div class="title-result__cover ">

                                <a href="media/6658816/ming-and-flo-fight-for-the-future.html" data-ga-action="cover"
                                    data-ga-title="Ming and Flo Fight for the Future" data-id="6658816"
                                    aria-label="Ming and Flo Fight for the Future">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-imageee12?title=Ming%20and%20Flo%20Fight%20for%20the%20Future"
                                        srcset="" alt="cover image of Ming and Flo Fight for the Future"
                                        data-ga-action="cover" data-title="Ming and Flo Fight for the Future"
                                        data-id="6658816"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imageee12?title=Ming%20and%20Flo%20Fight%20for%20the%20Future';">

                                </a>
                            </div>
                        </div>
                        <div class="title-result" data-isbn="6382650">

                            <div class="opacity-2 type-icon icon-ebook"></div>

                            <div class="title-result__cover opacity-2">

                                <a tabindex="-1" href="collections/868949/international-day-of-the-girl.html"
                                    data-ga-action="cover" data-ga-title="Athena the Brain" data-id="6382650"
                                    aria-label="Athena the Brain">


                                    <img not-data-src="Content/img/load.gif"
                                        src="media/default-cover-image7789?title=Athena%20the%20Brain" srcset=""
                                        alt="cover image of Athena the Brain" data-ga-action="cover"
                                        data-title="Athena the Brain" data-id="6382650"
                                        onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image7789?title=Athena%20the%20Brain';">

                                </a>
                            </div>
                            <a tabindex="0" class="featured-collection-see-all-link"
                                href="collections/868949/international-day-of-the-girl.html">
                                See all 20 titles
                            </a>
                        </div>
                    </div>
                    <a class="mobile-featured-collection-see-all-link"
                        href="collections/868949/international-day-of-the-girl.html">
                        See all 20 titles
                    </a>
                </div>
            </div>

        </div>
    </div>


    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/9320/biggest-books-of-november.html">Biggest Books of November</a>
            </h3>

            <p class="shelf__description">Fall into these great reads!</p>

            <a href="collections/9320/biggest-books-of-november.html" class="shelf__link">
                See all 70 titles <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">

            <div class="title-result" data-isbn="9079564">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/9079564/the-light-we-carry.html" data-ga-action="cover"
                        data-ga-title="The Light We Carry" data-id="9079564" aria-label="The Light We Carry">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image5bc0?title=The%20Light%20We%20Carry" srcset=""
                            alt="cover image of The Light We Carry" data-ga-action="cover"
                            data-title="The Light We Carry" data-id="9079564"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image5bc0?title=The%20Light%20We%20Carry';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/9079564/the-light-we-carry.html" data-ga-action="cover"
                            data-title="The Light We Carry" data-id="9079564">
                            The Light We Carry
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Michelle Obama · Michelle Obama (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8839068">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/8839068/desert-star.html" data-ga-action="cover" data-ga-title="Desert Star"
                        data-id="8839068" aria-label="Desert Star">


                        <img not-data-src="Content/img/load.gif" src="media/default-cover-image1ff2?title=Desert%20Star"
                            srcset="" alt="cover image of Desert Star" data-ga-action="cover" data-title="Desert Star"
                            data-id="8839068"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image1ff2?title=Desert%20Star';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8839068/desert-star.html" data-ga-action="cover" data-title="Desert Star"
                            data-id="8839068">
                            Desert Star
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Michael Connelly (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8769276">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/8769276/going-rogue.html" data-ga-action="cover" data-ga-title="Going Rogue"
                        data-id="8769276" aria-label="Going Rogue">


                        <img not-data-src="Content/img/load.gif" src="media/default-cover-image3f88?title=Going%20Rogue"
                            srcset="" alt="cover image of Going Rogue" data-ga-action="cover" data-title="Going Rogue"
                            data-id="8769276"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image3f88?title=Going%20Rogue';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8769276/going-rogue.html" data-ga-action="cover" data-title="Going Rogue"
                            data-id="8769276">
                            Going Rogue
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Janet Evanovich · Lorelei King (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="7872134">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/7872134/friends-lovers-and-the-big-terrible-thing.html" data-ga-action="cover"
                        data-ga-title="Friends, Lovers, and the Big Terrible Thing" data-id="7872134"
                        aria-label="Friends, Lovers, and the Big Terrible Thing">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image610d?title=Friends%2C%20Lovers%2C%20and%20the%20Big%20Terrible%20Thing"
                            srcset="" alt="cover image of Friends, Lovers, and the Big Terrible Thing"
                            data-ga-action="cover" data-title="Friends, Lovers, and the Big Terrible Thing"
                            data-id="7872134"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image610d?title=Friends%2C%20Lovers%2C%20and%20the%20Big%20Terrible%20Thing';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/7872134/friends-lovers-and-the-big-terrible-thing.html" data-ga-action="cover"
                            data-title="Friends, Lovers, and the Big Terrible Thing" data-id="7872134">
                            Friends, Lovers, and the Big Terrible Thing
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Matthew Perry · Matthew Perry (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="7345836">

                <div class="type-icon icon-audiobook"></div>

                <div class="title-result__cover">
                    <a href="media/7345836/bloodmarked.html" data-ga-action="cover" data-ga-title="Bloodmarked"
                        data-id="7345836" aria-label="Bloodmarked">


                        <img not-data-src="Content/img/load.gif" src="media/default-cover-imagee689?title=Bloodmarked"
                            srcset="" alt="cover image of Bloodmarked" data-ga-action="cover" data-title="Bloodmarked"
                            data-id="7345836"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagee689?title=Bloodmarked';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/7345836/bloodmarked.html" data-ga-action="cover" data-title="Bloodmarked"
                            data-id="7345836">
                            Bloodmarked
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Tracy Deonn · Joniece Abbott-Pratt (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="9086551">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/9086551/the-seven-moons-of-maali-almeida-winner-of-the-booker-pr.html"
                        data-ga-action="cover"
                        data-ga-title="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                        data-id="9086551"
                        aria-label="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imagec251?title=The%20Seven%20Moons%20of%20Maali%20Almeida%3A%20Winner%20of%20the%20Booker%20Prize%202022"
                            srcset=""
                            alt="cover image of The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                            data-ga-action="cover"
                            data-title="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                            data-id="9086551"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagec251?title=The%20Seven%20Moons%20of%20Maali%20Almeida%3A%20Winner%20of%20the%20Booker%20Prize%202022';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/9086551/the-seven-moons-of-maali-almeida-winner-of-the-booker-pr.html"
                            data-ga-action="cover"
                            data-title="The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022"
                            data-id="9086551">
                            The Seven Moons of Maali Almeida: Winner of the Booker Prize 2022
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Shehan Karunatilaka (2022)</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-ad ad-two adbutler-ad">
        <!-- Explore Tab - Leaderboard [async] -->

        <div id="placement_542088_1"></div>
    </div>
    <div class="horizontal-ad ad-one adbutler-ad mobile">
        <!-- Explore Tab - Mobile Banner [async] -->

        <div id="placement_542089_1"></div>
    </div>

    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/10945/celebrate-pride-with-these-great-reads.html">Celebrate Pride with
                    These Great Reads!</a>
            </h3>

            <p class="shelf__description">Enjoy these new releases for 2022 Pride!</p>

            <a href="collections/10945/celebrate-pride-with-these-great-reads.html" class="shelf__link">
                See all 66 titles <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">

            <div class="title-result" data-isbn="7772347">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/7772347/ten-steps-to-nanette.html" data-ga-action="cover"
                        data-ga-title="Ten Steps to Nanette" data-id="7772347" aria-label="Ten Steps to Nanette">


                        <img not-data-src="/Content/img/load.gif"
                            src="media/default-cover-image720f?title=Ten%20Steps%20to%20Nanette" srcset=""
                            alt="cover image of Ten Steps to Nanette" data-ga-action="cover"
                            data-title="Ten Steps to Nanette" data-id="7772347"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image720f?title=Ten%20Steps%20to%20Nanette';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/7772347/ten-steps-to-nanette.html" data-ga-action="cover"
                            data-title="Ten Steps to Nanette" data-id="7772347">
                            Ten Steps to Nanette
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Hannah Gadsby (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8846666">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/8846666/boys-come-first.html" data-ga-action="cover" data-ga-title="Boys Come First"
                        data-id="8846666" aria-label="Boys Come First">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image05e1?title=Boys%20Come%20First" srcset=""
                            alt="cover image of Boys Come First" data-ga-action="cover" data-title="Boys Come First"
                            data-id="8846666"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image05e1?title=Boys%20Come%20First';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8846666/boys-come-first.html" data-ga-action="cover" data-title="Boys Come First"
                            data-id="8846666">
                            Boys Come First
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Aaron Foley (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8736360">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/8736360/how-do-i-un-remember-this.html" data-ga-action="cover"
                        data-ga-title="How Do I Un-Remember This?" data-id="8736360"
                        aria-label="How Do I Un-Remember This?">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image12ec?title=How%20Do%20I%20Un-Remember%20This%3F" srcset=""
                            alt="cover image of How Do I Un-Remember This?" data-ga-action="cover"
                            data-title="How Do I Un-Remember This?" data-id="8736360"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image12ec?title=How%20Do%20I%20Un-Remember%20This%3F';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8736360/how-do-i-un-remember-this.html" data-ga-action="cover"
                            data-title="How Do I Un-Remember This?" data-id="8736360">
                            How Do I Un-Remember This?
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Danny Pellegrino (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8267735">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/8267735/my-own-way-celebrating-gender-freedom-for-kids.html" data-ga-action="cover"
                        data-ga-title="My Own Way: Celebrating Gender Freedom for Kids" data-id="8267735"
                        aria-label="My Own Way: Celebrating Gender Freedom for Kids">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imagefb06?title=My%20Own%20Way%3A%20Celebrating%20Gender%20Freedom%20for%20Kids"
                            srcset="" alt="cover image of My Own Way: Celebrating Gender Freedom for Kids"
                            data-ga-action="cover" data-title="My Own Way: Celebrating Gender Freedom for Kids"
                            data-id="8267735"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagefb06?title=My%20Own%20Way%3A%20Celebrating%20Gender%20Freedom%20for%20Kids';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8267735/my-own-way-celebrating-gender-freedom-for-kids.html"
                            data-ga-action="cover" data-title="My Own Way: Celebrating Gender Freedom for Kids"
                            data-id="8267735">
                            My Own Way: Celebrating Gender Freedom for Kids
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Joana Estrela · Jay Hulme (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8670962">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/8670962/happy-go-lucky.html" data-ga-action="cover" data-ga-title="Happy-Go-Lucky"
                        data-id="8670962" aria-label="Happy-Go-Lucky">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imagef785?title=Happy-Go-Lucky" srcset=""
                            alt="cover image of Happy-Go-Lucky" data-ga-action="cover" data-title="Happy-Go-Lucky"
                            data-id="8670962"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagef785?title=Happy-Go-Lucky';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8670962/happy-go-lucky.html" data-ga-action="cover" data-title="Happy-Go-Lucky"
                            data-id="8670962">
                            Happy-Go-Lucky
                        </a>
                    </h4>
                    <h5 class="title-result__creator">David Sedaris (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="8328154">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/8328154/coming-up-for-air.html" data-ga-action="cover"
                        data-ga-title="Coming Up for Air" data-id="8328154" aria-label="Coming Up for Air">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image9fe1?title=Coming%20Up%20for%20Air" srcset=""
                            alt="cover image of Coming Up for Air" data-ga-action="cover" data-title="Coming Up for Air"
                            data-id="8328154"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image9fe1?title=Coming%20Up%20for%20Air';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/8328154/coming-up-for-air.html" data-ga-action="cover"
                            data-title="Coming Up for Air" data-id="8328154">
                            Coming Up for Air
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Tom Daley (2022)</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/17532/2022-james-beard-award-winners.html">2022 James Beard Award
                    Winners</a>
            </h3>

            <p class="shelf__description">Did you know that your library can also offer cookbooks for you to
                enjoy?</p>

            <a href="collections/17532/2022-james-beard-award-winners.html" class="shelf__link">
                See all 10 titles <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">

            <div class="title-result" data-isbn="5216116">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/5216116/in-bibis-kitchen.html" data-ga-action="cover"
                        data-ga-title="In Bibi's Kitchen" data-id="5216116" aria-label="In Bibi's Kitchen">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imagecd6b?title=In%20Bibi%27s%20Kitchen" srcset=""
                            alt="cover image of In Bibi's Kitchen" data-ga-action="cover" data-title="In Bibi's Kitchen"
                            data-id="5216116"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagecd6b?title=In%20Bibi%27s%20Kitchen';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/5216116/in-bibis-kitchen.html" data-ga-action="cover"
                            data-title="In Bibi's Kitchen" data-id="5216116">
                            In Bibi's Kitchen
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Hawa Hassan · Julia Turshen (2020)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="6016350">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/6016350/the-way-of-the-cocktail.html" data-ga-action="cover"
                        data-ga-title="The Way of the Cocktail" data-id="6016350" aria-label="The Way of the Cocktail">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image62d4?title=The%20Way%20of%20the%20Cocktail" srcset=""
                            alt="cover image of The Way of the Cocktail" data-ga-action="cover"
                            data-title="The Way of the Cocktail" data-id="6016350"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image62d4?title=The%20Way%20of%20the%20Cocktail';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/6016350/the-way-of-the-cocktail.html" data-ga-action="cover"
                            data-title="The Way of the Cocktail" data-id="6016350">
                            The Way of the Cocktail
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Julia Momosé · Emma Janzen (2021)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="5256606">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/5256606/mister-jius-in-chinatown.html" data-ga-action="cover"
                        data-ga-title="Mister Jiu's in Chinatown" data-id="5256606"
                        aria-label="Mister Jiu's in Chinatown">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image72e6?title=Mister%20Jiu%27s%20in%20Chinatown" srcset=""
                            alt="cover image of Mister Jiu's in Chinatown" data-ga-action="cover"
                            data-title="Mister Jiu's in Chinatown" data-id="5256606"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image72e6?title=Mister%20Jiu%27s%20in%20Chinatown';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/5256606/mister-jius-in-chinatown.html" data-ga-action="cover"
                            data-title="Mister Jiu's in Chinatown" data-id="5256606">
                            Mister Jiu's in Chinatown
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Brandon Jew · Tienlon Ho (2021)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="5446598">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/5446598/girly-drinks.html" data-ga-action="cover" data-ga-title="Girly Drinks"
                        data-id="5446598" aria-label="Girly Drinks">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imaged0ee?title=Girly%20Drinks" srcset=""
                            alt="cover image of Girly Drinks" data-ga-action="cover" data-title="Girly Drinks"
                            data-id="5446598"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imaged0ee?title=Girly%20Drinks';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/5446598/girly-drinks.html" data-ga-action="cover" data-title="Girly Drinks"
                            data-id="5446598">
                            Girly Drinks
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Mallory O'Meara (2021)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="4906016">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/4906016/mosquito-supper-club.html" data-ga-action="cover"
                        data-ga-title="Mosquito Supper Club" data-id="4906016" aria-label="Mosquito Supper Club">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image88d1?title=Mosquito%20Supper%20Club" srcset=""
                            alt="cover image of Mosquito Supper Club" data-ga-action="cover"
                            data-title="Mosquito Supper Club" data-id="4906016"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image88d1?title=Mosquito%20Supper%20Club';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/4906016/mosquito-supper-club.html" data-ga-action="cover"
                            data-title="Mosquito Supper Club" data-id="4906016">
                            Mosquito Supper Club
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Melissa M. Martin (2020)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="5851696">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/5851696/mooncakes-and-milk-bread.html" data-ga-action="cover"
                        data-ga-title="Mooncakes and Milk Bread" data-id="5851696"
                        aria-label="Mooncakes and Milk Bread">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imaged3b0?title=Mooncakes%20and%20Milk%20Bread" srcset=""
                            alt="cover image of Mooncakes and Milk Bread" data-ga-action="cover"
                            data-title="Mooncakes and Milk Bread" data-id="5851696"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imaged3b0?title=Mooncakes%20and%20Milk%20Bread';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/5851696/mooncakes-and-milk-bread.html" data-ga-action="cover"
                            data-title="Mooncakes and Milk Bread" data-id="5851696">
                            Mooncakes and Milk Bread
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Kristina Cho (2021)</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/45038/top-2022-releases.html">Top 2022 Releases</a>
            </h3>

            <p class="shelf__description">Get excited for these new 2022 reads!
                Borrow these for free from your library on the Libby app. </p>

            <a href="collections/45038/top-2022-releases.html" class="shelf__link">
                See all 63 titles <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">

            <div class="title-result" data-isbn="6384353">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/6384353/the-paris-apartment.html" data-ga-action="cover"
                        data-ga-title="The Paris Apartment" data-id="6384353" aria-label="The Paris Apartment">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image6cfd?title=The%20Paris%20Apartment" srcset=""
                            alt="cover image of The Paris Apartment" data-ga-action="cover"
                            data-title="The Paris Apartment" data-id="6384353"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image6cfd?title=The%20Paris%20Apartment';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/6384353/the-paris-apartment.html" data-ga-action="cover"
                            data-title="The Paris Apartment" data-id="6384353">
                            The Paris Apartment
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Lucy Foley (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="6301985">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/6301985/what-the-fireflies-knew.html" data-ga-action="cover"
                        data-ga-title="What the Fireflies Knew" data-id="6301985" aria-label="What the Fireflies Knew">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imagedb4c?title=What%20the%20Fireflies%20Knew" srcset=""
                            alt="cover image of What the Fireflies Knew" data-ga-action="cover"
                            data-title="What the Fireflies Knew" data-id="6301985"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagedb4c?title=What%20the%20Fireflies%20Knew';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/6301985/what-the-fireflies-knew.html" data-ga-action="cover"
                            data-title="What the Fireflies Knew" data-id="6301985">
                            What the Fireflies Knew
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Kai Harris (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="6286902">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/6286902/im-so-not-over-you.html" data-ga-action="cover"
                        data-ga-title="I'm So (Not) Over You" data-id="6286902" aria-label="I'm So (Not) Over You">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image1568?title=I%27m%20So%20%28Not%29%20Over%20You" srcset=""
                            alt="cover image of I'm So (Not) Over You" data-ga-action="cover"
                            data-title="I'm So (Not) Over You" data-id="6286902"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image1568?title=I%27m%20So%20%28Not%29%20Over%20You';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/6286902/im-so-not-over-you.html" data-ga-action="cover"
                            data-title="I'm So (Not) Over You" data-id="6286902">
                            I'm So (Not) Over You
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Kosoko Jackson (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="7226530">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/7226530/you-made-a-fool-of-death-with-your-beauty.html" data-ga-action="cover"
                        data-ga-title="You Made a Fool of Death with Your Beauty" data-id="7226530"
                        aria-label="You Made a Fool of Death with Your Beauty">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-image3f4c?title=You%20Made%20a%20Fool%20of%20Death%20with%20Your%20Beauty"
                            srcset="" alt="cover image of You Made a Fool of Death with Your Beauty"
                            data-ga-action="cover" data-title="You Made a Fool of Death with Your Beauty"
                            data-id="7226530"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-image3f4c?title=You%20Made%20a%20Fool%20of%20Death%20with%20Your%20Beauty';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/7226530/you-made-a-fool-of-death-with-your-beauty.html" data-ga-action="cover"
                            data-title="You Made a Fool of Death with Your Beauty" data-id="7226530">
                            You Made a Fool of Death with Your Beauty
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Akwaeke Emezi (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="6244669">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/6244669/black-cake.html" data-ga-action="cover" data-ga-title="Black Cake"
                        data-id="6244669" aria-label="Black Cake">


                        <img not-data-src="Content/img/load.gif" src="media/default-cover-imagebc43?title=Black%20Cake"
                            srcset="" alt="cover image of Black Cake" data-ga-action="cover" data-title="Black Cake"
                            data-id="6244669"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagebc43?title=Black%20Cake';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/6244669/black-cake.html" data-ga-action="cover" data-title="Black Cake"
                            data-id="6244669">
                            Black Cake
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Charmaine Wilkerson (2022)</h5>
                </div>
            </div>

            <div class="title-result" data-isbn="6225859">

                <div class="type-icon icon-ebook"></div>

                <div class="title-result__cover">
                    <a href="media/6225859/violeta-english-edition.html" data-ga-action="cover"
                        data-ga-title="Violeta [English Edition]" data-id="6225859"
                        aria-label="Violeta [English Edition]">


                        <img not-data-src="Content/img/load.gif"
                            src="media/default-cover-imagef3a5?title=Violeta%20%5BEnglish%20Edition%5D" srcset=""
                            alt="cover image of Violeta [English Edition]" data-ga-action="cover"
                            data-title="Violeta [English Edition]" data-id="6225859"
                            onerror="this.onerror = null; this.srcset = ''; this.src = 'media/default-cover-imagef3a5?title=Violeta%20%5BEnglish%20Edition%5D';">

                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="media/6225859/violeta-english-edition.html" data-ga-action="cover"
                            data-title="Violeta [English Edition]" data-id="6225859">
                            Violeta [English Edition]
                        </a>
                    </h4>
                    <h5 class="title-result__creator">Isabel Allende · Frances Riddle (2022)</h5>
                </div>
            </div>
        </div>
    </div>



</div>