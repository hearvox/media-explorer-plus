<?php
/*

*/

/* */
function mexpflikr_filter( $html ) {
    $html = $html . '<div>xxx</div>';
    return $html;
}
// add_filter( 'oembed_result', 'mexpflikr_filter', 1, 1 );

?>
<pre>

file: service.php
function: request()

$photo = $search_response['photos']['photo']

                        Array
(
    [id] => 25867343950
    [owner] => 49929920@N04
    [secret] => a45c870c51
    [server] => 1618
    [farm] => 2
    [title] => #photo #photos #pic #pics #TagsForLikes #picture #pictures #snapshot #art #beautiful #instagood #picoftheday #photooftheday #color #all_shots #exposure #composition #focus #capture #moment
    [ispublic] => 1
    [isfriend] => 0
    [isfamily] => 0
    [license] => 3
    [description] => Array
        (
            [_content] => I'm at Paris! &lt;a href="http://4sq.com/V5AKUI" rel="nofollow"&gt;4sq.com/V5AKUI&lt;/a&gt;
        )

    [dateupload] => 1459371658
    [datetaken] => 2016-03-30 23:00:58
    [datetakengranularity] => 0
    [datetakenunknown] => 1
    [ownername] => magnifyk
    [media] => photo
    [media_status] => ready
)

https://www.flickr.com/photos/magnifyk/


old:
                        Array
(
    [id] => 26074973471
    [owner] => 139679238@N03
    [secret] => 303c8bb0ab
    [server] => 1656
    [farm] => 2
    [title] => Paris Metalasse Baby Blanket: Progress III
    [ispublic] => 1
    [isfriend] => 0
    [isfamily] => 0
)


var: $request
                        Array
(
    [params] => Array
        (
            [text] => paris
            [tab] => all
        )

    [tab] => all
    [min_id] =>
    [max_id] =>
    [page] => 0
    [_nonce] => a0d3b14e86
    [service] => flickr_mexp_service
    [action] => mexp_request
    [user_id] => 1
)


$search_response['photos']['photo']


var: $search_response
                        Array
(
    [photos] => Array
        (
            [page] => 1
            [pages] => 12026
            [perpage] => 19
            [total] => 228492
            [photo] => Array
                (
                    [0] => Array
                        (
                            [id] => 26115577376
                            [owner] => 134991235@N07
                            [secret] => e2bcf2d713
                            [server] => 1614
                            [farm] => 2
                            [title] => A sylph is a little air spirit: #poems #literature #French #frenchliterature #francaise #lovefrance #lovetravel #Paris #loveparis #jadoreparis #dreamdestinations
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [1] => Array
                        (
                            [id] => 26141498455
                            [owner] => 132652966@N06
                            [secret] => 651d8de438
                            [server] => 1463
                            [farm] => 2
                            [title] => #effeltower #paris #cityoflights #monamour by lil_winter94 Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [2] => Array
                        (
                            [id] => 26115567666
                            [owner] => 132652966@N06
                            [secret] => 9174aa9088
                            [server] => 1694
                            [farm] => 2
                            [title] => 迷失在Paris的小青年. by joe993218 Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [3] => Array
                        (
                            [id] => 25538871453
                            [owner] => 132652966@N06
                            [secret] => 16ce8c2e10
                            [server] => 1465
                            [farm] => 2
                            [title] => Not a bad view #Eiffeltower #paris by conneee216 Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [4] => Array
                        (
                            [id] => 25536725684
                            [owner] => 132652966@N06
                            [secret] => 02a65cc33a
                            [server] => 1537
                            [farm] => 2
                            [title] => #paris #effeltower by paradisede Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [5] => Array
                        (
                            [id] => 25538868813
                            [owner] => 132652966@N06
                            [secret] => dc7b0ce23a
                            [server] => 1449
                            [farm] => 2
                            [title] => and some days are a nightmare and some dreams come true but the lord's still right there it's just déjà vu #Paris #eifeltower #tbt #vacation #champselysees #arcdetriomphe #france by chris_scharn Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [6] => Array
                        (
                            [id] => 26049020662
                            [owner] => 132652966@N06
                            [secret] => 718900d1dc
                            [server] => 1708
                            [farm] => 2
                            [title] => A queridinha <img draggable="false" class="emoji" alt="🗼" src="https://s.w.org/images/core/emoji/72x72/1f5fc.png"> #Paris #TowerEffel by raianneguedes_ Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [7] => Array
                        (
                            [id] => 25538867913
                            [owner] => 132652966@N06
                            [secret] => 468d8e3e16
                            [server] => 1586
                            [farm] => 2
                            [title] => Eiffel Tower #eiffeltower #paris #France #francia #Europe #Europa by mbradford001 Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [8] => Array
                        (
                            [id] => 26141493595
                            [owner] => 132652966@N06
                            [secret] => e9f5d9cbd1
                            [server] => 1717
                            [farm] => 2
                            [title] => Day 1:  #paris #iffletower by wessywes11 Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [9] => Array
                        (
                            [id] => 26141493155
                            [owner] => 132652966@N06
                            [secret] => d4ce7652fa
                            [server] => 1516
                            [farm] => 2
                            [title] => Paris is always a great idea  <img draggable="false" class="emoji" alt="🔊" src="https://s.w.org/images/core/emoji/72x72/1f50a.png"><img draggable="false" class="emoji" alt="🔴" src="https://s.w.org/images/core/emoji/72x72/1f534.png"><img draggable="false" class="emoji" alt="⚫️" src="https://s.w.org/images/core/emoji/72x72/26ab.png"><img draggable="false" class="emoji" alt="🔊" src="https://s.w.org/images/core/emoji/72x72/1f50a.png"> con un hermano @sebasdiazc by syohou Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [10] => Array
                        (
                            [id] => 26115560916
                            [owner] => 132652966@N06
                            [secret] => ec95b9855c
                            [server] => 1466
                            [farm] => 2
                            [title] => Remembering back when I was 8 years old and telling my parents that I wanted to go to Paris and 8 years later that dream came true <img draggable="false" class="emoji" alt="💕" src="https://s.w.org/images/core/emoji/72x72/1f495.png"><img draggable="false" class="emoji" alt="💕" src="https://s.w.org/images/core/emoji/72x72/1f495.png"> by thatsotyra Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [11] => Array
                        (
                            [id] => 26075161131
                            [owner] => 132652966@N06
                            [secret] => 71c1e7d8da
                            [server] => 1678
                            [farm] => 2
                            [title] => That moment when you ride from London to Paris and realise what your bottle holder is REALLY for #ccspitstoparis #beauvaistoparis #happyboy by mreuden Eiffel_Tower #France
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [12] => Array
                        (
                            [id] => 26048899812
                            [owner] => 135158052@N05
                            [secret] => 0b18c27bfe
                            [server] => 1522
                            [farm] => 2
                            [title] => first day in Paris
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [13] => Array
                        (
                            [id] => 25868460300
                            [owner] => 126433826@N05
                            [secret] => a1f5237cba
                            [server] => 1662
                            [farm] => 2
                            [title] => Purity
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [14] => Array
                        (
                            [id] => 26074973471
                            [owner] => 139679238@N03
                            [secret] => 303c8bb0ab
                            [server] => 1656
                            [farm] => 2
                            [title] => Paris Metalasse Baby Blanket: Progress III
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [15] => Array
                        (
                            [id] => 26048814722
                            [owner] => 85575517@N04
                            [secret] => e8cba42b91
                            [server] => 1576
                            [farm] => 2
                            [title] => Updated Fashion Culture in Men and Womens Couture Lifestyle Freedom.
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [16] => Array
                        (
                            [id] => 26141257825
                            [owner] => 138470676@N05
                            [secret] => 90685da674
                            [server] => 1586
                            [farm] => 2
                            [title] => Leave a Massage
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [17] => Array
                        (
                            [id] => 25536212574
                            [owner] => 116535434@N04
                            [secret] => da7b151dc6
                            [server] => 1708
                            [farm] => 2
                            [title] => 55003 KX13HYS stands at Victoria Coach Station with the 2000 ME06 to Paris and then on to Milan
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                    [18] => Array
                        (
                            [id] => 26048506132
                            [owner] => 116535434@N04
                            [secret] => 93895ff9ae
                            [server] => 1649
                            [farm] => 2
                            [title] => 55028 YY65VXD stands at London V|ictoria after arriving with an ME05 from Paris
                            [ispublic] => 1
                            [isfriend] => 0
                            [isfamily] => 0
                        )

                )

        )

    [stat] => ok
)




https://api.flickr.com/services/rest?method=flickr.photos.search&format=json&nojsoncallback=1&page=0&per_page=19&api_key=47a58e28dfdf95e41be62410eb8bcf03&license=2,3,4,5,6,7,8&extras=date_upload,date_taken,description,license,media,owner_name&tags=newspaper-dress

{"photos": {"page":1,"pages":1,"perpage":19,"total":"3","photo":[
        {"id":"9990655265","owner":"89165847@N00","secret":"22b5d237c2","server":"3714","farm":4,"title":"Dressed as Media","ispublic":1,"isfriend":0,"isfamily":0,"license":"5","description":
            {"_content":"                               "}
            ,"dateupload":"1380418058","datetaken":"2013-09-07 21:46:16","datetakengranularity":"0","datetakenunknown":0,"ownername":"mikecogh","media":"photo","media_status":"ready"},{"id":"5795142131","owner":"23088289@N02","secret":"7af55c8031","server":"3614","farm":4,"title":"John Galliano\/Christian Dior Newspaper Dress","ispublic":1,"isfriend":0,"isfamily":0,"license":"5","description":{"_content":""},"dateupload":"1307161596","datetaken":"2011-05-28 13:38:09","datetakengranularity":"0","datetakenunknown":0,"ownername":"cphoffman42","media":"photo","media_status":"ready"},{"id":"4844410627","owner":"10259139@N00","secret":"72d4e3598a","server":"4145","farm":5,"title":"Paper Dress","ispublic":1,"isfriend":0,"isfamily":0,"license":"3","description":{"_content":"Long Beach's own Grunion Gazette Dress!"},"dateupload":"1280530063","datetaken":"2010-06-20 19:40:34","datetakengranularity":"0","datetakenunknown":0,"ownername":"orngejuglr","media":"photo","media_status":"ready"}]},"stat":"ok"}


$data
stdClass Object
(
    [type] => photo
    [flickr_type] => photo
    [title] => 2013 Achievements
    [author_name] => Julie70 Joyoflife
    [author_url] => https://www.flickr.com/photos/joyoflife/
    [width] => 640
    [height] => 480
    [url] => https://farm8.staticflickr.com/7426/11793785093_7607994aba_z.jpg
    [web_page] => https://www.flickr.com/photos/joyoflife/11793785093/
    [thumbnail_url] => https://farm8.staticflickr.com/7426/11793785093_7607994aba_q.jpg
    [thumbnail_width] => 150
    [thumbnail_height] => 150
    [web_page_short_url] => https://flic.kr/p/iYbeqi
    [license] => Attribution-NonCommercial-NoDerivs License
    [license_url] => https://creativecommons.org/licenses/by-nc-nd/2.0/
    [license_id] => 3
    [html] => (see iframe at bottom)
    [version] => 1.0
    [cache_age] => 3600
    [provider_name] => Flickr
    [provider_url] => https://www.flickr.com/
)
</pre>


<licenses>
  <license id="0" name="All Rights Reserved" url="" />
  <license id="1" name="Attribution-NonCommercial-ShareAlike License" url="http://creativecommons.org/licenses/by-nc-sa/2.0/" />
  <license id="2" name="Attribution-NonCommercial License" url="http://creativecommons.org/licenses/by-nc/2.0/" />
  <license id="3" name="Attribution-NonCommercial-NoDerivs License" url="http://creativecommons.org/licenses/by-nc-nd/2.0/" />
  <license id="4" name="Attribution License" url="http://creativecommons.org/licenses/by/2.0/" />
  <license id="5" name="Attribution-ShareAlike License" url="http://creativecommons.org/licenses/by-sa/2.0/" />
  <license id="6" name="Attribution-NoDerivs License" url="http://creativecommons.org/licenses/by-nd/2.0/" />
  <license id="7" name="No known copyright restrictions" url="http://flickr.com/commons/usage/" />
  <license id="8" name="United States Government Work" url="http://www.usa.gov/copyright.shtml" />
</licenses>

<label><input type="checkbox" name="license[]" value="0" />All Rights Reserved</label>
<label><input type="checkbox" name="license[]" value="1" />Attribution-NonCommercial-ShareAlike License</label> <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/" title="Attribution-NonCommercial-ShareAlike 2.0 Generic">CC BY-NC-SA 2.0</a>
<label><input type="checkbox" name="license[]" value="2" />Attribution-NonCommercial License</label> <a href="http://creativecommons.org/licenses/by-nc/2.0/" title="Attribution-NonCommercial 2.0 Generic">CC BY-NC 2.0</a>
<label><input type="checkbox" name="license[]" value="3" />Attribution-NonCommercial-NoDerivs License</label> <a href="http://creativecommons.org/licenses/by-nc-nd/2.0/" title="Attribution-NonCommercial-NoDerivs 2.0 Generic">CC BY-NC-ND 2.0</a>
<label><input type="checkbox" name="license[]" value="4" />Attribution License</label> <a href="http://creativecommons.org/licenses/by/2.0/" title="Attribution 2.0 Generic">CC BY 2.0</a>
<label><input type="checkbox" name="license[]" value="5" />Attribution-ShareAlike License</label> <a href="http://creativecommons.org/licenses/by-sa/2.0/" title="Attribution-ShareAlike 2.0 Generic">CC BY-SA 2.0</a>
<label><input type="checkbox" name="license[]" value="6" />Attribution-NoDerivs License </label><a href="http://creativecommons.org/licenses/by-nd/2.0/" title="Attribution-NoDerivs 2.0 Generic">CC BY-ND 2.0</a>
<label><input type="checkbox" name="license[]" value="7" />No known copyright restrictions</label> <a href="http://flickr.com/commons/usage/" title="The Commons">Flickr Commons</a>
<label><input type="checkbox" name="license[]" value="8" />United States Government Work</label>
 <a href="http://www.usa.gov/copyright.shtml" title="U.S. Government Works">USA.gov</a>



 <hr />


flickr object html property:
<iframe frameborder="0" allowfullscreen="" class="flickr-embed-frame" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen="" width="628" height="471" data-natural-width="640" data-natural-height="480" style="overflow: hidden; padding: 0px; margin: 0px; width: 628px; height: 471px; max-width: 100%;" data-loaded="true"></iframe>
<script async="" src="https://embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

html in iframe:
 <!DOCTYPE html><html lang="en-US"><head>

    <title>2013 Achievements</title>
    <style type="text/css" media="screen">
    body {
  margin: 0;
  background: transparent;
  overflow: hidden;
}
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100%;
}
.flickr-embed {
  position: relative;
  font-family: "Helvetica Neue", helvetica, arial, sans-serif;
  background: #FFF;
  box-shadow: inset 0px 0px 0px 1px #EEEEEE;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.flickr-embed a {
  text-decoration: none;
}
.flickr-embed.is-slideshow .slide {
  display: none;
}
.flickr-embed.is-slideshow .slide[data-is-current-slide] {
  display: block;
  -webkit-transform: rotate(0);
          transform: rotate(0);
}
.flickr-embed .flickr-embed-header {
  height: 46px;
}
.flickr-embed .flickr-embed-header .avatar {
  width: 30px;
  height: 30px;
  border-radius: 100%;
  overflow: hidden;
  margin-right: 15px;
  float: left;
  margin-top: 8px;
  background-size: cover;
}
.flickr-embed .flickr-embed-header .branding {
  float: right;
  width: 50px;
  margin: 6px 15px 0 15px;
  white-space: normal;
  height: 38px;
}
.flickr-embed .flickr-embed-header .branding svg {
  fill: #989898;
  pointer-events: none;
  height: 38px;
}
.flickr-embed .flickr-embed-header .branding a {
  display: block;
}
.flickr-embed .flickr-embed-header .attribution {
  font-size: 15px;
  margin: 0 0 0 15px;
  line-height: 46px;
}
.flickr-embed .flickr-embed-header .attribution a {
  color: #989898;
}
.flickr-embed .flickr-embed-photo {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: relative;
  background: black;
}
.flickr-embed .flickr-embed-photo > a {
  display: block;
}
.flickr-embed .flickr-embed-photo a {
  color: white;
}
.flickr-embed .flickr-embed-photo img {
  margin-bottom: -3px;
  pointer-events: none;
}
.flickr-embed .flickr-embed-photo canvas {
  z-index: 1;
  cursor: move;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
.flickr-embed .flickr-embed-photo .instructions-overlay {
  position: absolute;
  color: white;
  top: 50%;
  margin-top: -25px;
  left: 0;
  right: 0;
  height: 50px;
  width: 100%;
  text-align: center;
  line-height: 1.5em;
}
.flickr-embed .flickr-embed-photo .instructions-overlay p {
  margin-top: 10px;
}
.flickr-embed .flickr-embed-photo .branding,
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer,
.flickr-embed .flickr-embed-photo .sharing {
  position: absolute;
  opacity: 0;
  -webkit-transition: opacity 150ms ease-in-out;
          transition: opacity 150ms ease-in-out;
  z-index: 2;
}
.flickr-embed .flickr-embed-photo .sharing {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 260px;
  pointer-events: auto;
  z-index: 2;
}
.flickr-embed .flickr-embed-photo .sharing .share-logo {
  width: 35px;
  height: 35px;
  float: left;
  margin-right: 15px;
}
.flickr-embed .flickr-embed-photo .sharing svg {
  pointer-events: none;
  fill: white;
  width: 35px;
  height: 35px;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer {
  bottom: 15px;
  left: 15px;
  top: 15px;
  right: 15px;
  pointer-events: none;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer.is-video {
  bottom: 35px;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .title-and-attribution,
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .license {
  position: absolute;
  bottom: 0;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .title-and-attribution {
  width: 100%;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .attribution,
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .title {
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
  color: white;
  font-size: 14px;
  left: 0;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .attribution a,
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .title a {
  pointer-events: initial;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .title {
  width: 50%;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .attribution {
  font-size: 12px;
  margin-top: 5px;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer .license {
  right: 0;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
  color: white;
  font-size: 10px;
  pointer-events: none;
  display: inline-block;
  line-height: 1.6em;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer.is-narrow .title-and-attribution {
  bottom: 20px;
}
.flickr-embed .flickr-embed-photo .flickr-embed-photo-footer.is-narrow .license {
  left: 0;
}
.flickr-embed .flickr-embed-photo .branding {
  top: 5px;
  right: 15px;
  width: 80px;
}
.flickr-embed .flickr-embed-photo .branding svg {
  fill: white;
  stroke: black;
  stroke-width: 0.2;
}
.flickr-embed .flickr-embed-photo:hover .flickr-embed-photo-footer,
.flickr-embed .flickr-embed-photo:hover .branding,
.flickr-embed .flickr-embed-photo:hover .sharing,
.flickr-embed .flickr-embed-photo:hover .navigation {
  opacity: 1;
}
.flickr-embed .flickr-embed-photo .navigation {
  position: absolute;
  display: block;
  width: 40px;
  height: 80px;
  margin-top: -40px;
  background: rgba(0, 0, 0, 0.5);
  top: 50%;
  border-radius: 5px;
  opacity: 0;
  -webkit-transition: opacity 150ms ease-in-out;
          transition: opacity 150ms ease-in-out;
  z-index: 2;
}
.flickr-embed .flickr-embed-photo .navigation::before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  top: 29px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.flickr-embed .flickr-embed-photo .navigation.previous {
  left: 15px;
}
.flickr-embed .flickr-embed-photo .navigation.previous::before {
  left: 14px;
  border-left: 4px solid white;
  border-bottom: 4px solid white;
}
.flickr-embed .flickr-embed-photo .navigation.next {
  right: 15px;
}
.flickr-embed .flickr-embed-photo .navigation.next::before {
  left: 5px;
  border-top: 4px solid white;
  border-right: 4px solid white;
}
.flickr-embed .flickr-embed-photo .navigation[disabled="disabled"]::before {
  border-color: #444;
}
.flickr-embed .flickr-embed-photo .navigation:not([disabled="disabled"]):hover,
.flickr-embed .flickr-embed-photo .navigation:active {
  cursor: pointer;
  background: rgba(0, 0, 0, 0.7);
  opacity: 1;
}
.flickr-embed .flickr-embed-photo .play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 90px;
  height: 60px;
  margin: -45px 0 0 -45px;
  background: white;
  border-radius: 5px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
  z-index: 10;
  display: block;
  pointer-events: none;
}
.flickr-embed .flickr-embed-photo .play-button::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -16px 0 0 -12px;
  border-top: 16px solid transparent;
  border-bottom: 16px solid transparent;
  border-left: 24px solid black;
  z-index: 20;
}
.flickr-embed .flickr-embed-photo .slide[data-is-playing] .play-button {
  display: none;
}
.flickr-embed .flickr-embed-photo:hover {
  cursor: pointer;
}
.flickr-embed .flickr-embed-photo:hover .play-button {
  background: #EDEDED;
}
.flickr-embed .flickr-embed-footer {
  padding: 15px;
}
.flickr-embed .flickr-embed-footer a {
  color: #212124;
}
.flickr-embed .flickr-embed-footer h1 {
  font-size: 16px;
  font-weight: 600;
  margin: 0;
}
.flickr-embed .flickr-embed-footer.has-description h1 {
  margin: 0 0 15px 0;
}
.flickr-embed .flickr-embed-footer.is-truncated {
  padding-bottom: 5px;
}
.flickr-embed .flickr-embed-footer .description,
.flickr-embed .flickr-embed-footer .description-full {
  font-size: 14px;
  line-height: 20px;
  position: static;
}
.flickr-embed .flickr-embed-footer .description-full {
  display: none;
}
.flickr-embed .flickr-embed-footer .truncated-dots {
  display: block;
  width: 100%;
  height: 15px;
  padding: 10px 0 0 0;
}
.flickr-embed .flickr-embed-footer .truncated-dots:hover {
  cursor: pointer;
}
.flickr-embed .flickr-embed-footer .truncated-dots .dots,
.flickr-embed .flickr-embed-footer .truncated-dots .dots::before,
.flickr-embed .flickr-embed-footer .truncated-dots .dots::after {
  pointer-events: none;
  width: 5px;
  height: 5px;
  background: #ADADAD;
  border-radius: 50%;
  margin: 0 auto;
  content: "";
  display: block;
  position: relative;
}
.flickr-embed .flickr-embed-footer .truncated-dots .dots::before {
  left: -8px;
}
.flickr-embed .flickr-embed-footer .truncated-dots .dots::after {
  left: 8px;
  top: -5px;
}
.flickr-embed[data-initial-fade] .navigation,
.flickr-embed[data-initial-fade] .branding,
.flickr-embed[data-initial-fade] .sharing,
.flickr-embed[data-initial-fade] .flickr-embed-photo-footer {
  opacity: 1;
}

    </style>
    <script type="text/javascript">
        var views = {};

        function addview(url) {
            parent.postMessage({
                name: 'loaded',
                data: photoIds[slideshowCurrentPositionIndex]
            }, '*');

            if (views[url]) {
                return;
            }

            views[url] = true;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://embedr.flickr.com' + url, true);
            xhr.setRequestHeader('X-Embedr-Referrer', document.referrer);
            xhr.send();
        }
    </script>

</head>
<body>

    <div class="flickr-embed" data-flickr-embed="true">


    <div class="flickr-embed-photo " style="width: 628px; height: 471px; background-color: ;">


                <a data-rapid="photo" data-slideshow-position="" target="_blank" href="https://www.flickr.com/photos/joyoflife/11793785093" class="slide">
                    <img src="https://farm8.staticflickr.com/7426/11793785093_b6bf9de046_h.jpg" width="628" height="471" alt="" onload="addview(this.getAttribute('data-path'))" data-path="/photos/11793785093/addview" style="width: 628px; height: 471px;">
                </a>

            <div data-slideshow-position="" class="flickr-embed-photo-footer slide  ">

                        <div class="sharing">
                            <div data-url="https://www.facebook.com/dialog/share?app_id=137206539707334&amp;display=popup&amp;redirect_uri=https%3A%2F%2Fwww.flickr.com%2Fwindow_close.html&amp;href=https%3A%2F%2Fwww.flickr.com%2Fphotos%2Fjoyoflife%2F11793785093" class="share-logo facebook-logo">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

                                <path id="facebook-circle-outline-icon" d="M256.417,90c44.34,0,86.026,17.267,117.38,48.62c31.354,31.354,48.62,73.04,48.62,117.38

                                    c0,44.34-17.267,86.026-48.62,117.38c-31.354,31.353-73.04,48.62-117.38,48.62s-86.026-17.268-117.38-48.62

                                    c-31.354-31.354-48.62-73.04-48.62-117.38c0-44.34,17.267-86.026,48.62-117.38C170.391,107.267,212.077,90,256.417,90 M256.417,50

                                    c-113.771,0-206,92.229-206,206s92.229,206,206,206s206-92.229,206-206S370.188,50,256.417,50L256.417,50z M228.111,218.133h-23.517

                                    v38.386h23.517v112.764h45.22V256.04h31.551l3.358-37.907h-34.909c0,0,0-14.155,0-21.593c0-8.938,1.801-12.477,10.438-12.477

                                    c6.957,0,24.471,0,24.471,0v-39.347c0,0-25.797,0-31.309,0c-33.649,0-48.82,14.814-48.82,43.186

                                    C228.111,212.614,228.111,218.133,228.111,218.133z"></path>

                                </svg>  </div>
                            <div data-url="https://www.tumblr.com/widgets/share/tool?caption=%3Cstrong%3E2013%20Achievements%20%3Ca%20href%3D%22https%3A%2F%2Fwww.flickr.com%2Fphotos%2Fjoyoflife%22%3Eby%20Julie%20Kertesz%3C%2Fa%3E%3C%2Fstrong%3E&amp;tags=flickr&amp;&amp;url=https%3A%2F%2Fwww.flickr.com%2Fphotos%2Fjoyoflife%2F11793785093" class="share-logo tumblr-logo">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

                                <path id="tumblr-circle-outline-icon" d="M256.417,90c44.34,0,86.026,17.267,117.38,48.62c31.354,31.354,48.62,73.04,48.62,117.38

                                    c0,44.34-17.267,86.026-48.62,117.38c-31.354,31.353-73.04,48.62-117.38,48.62s-86.026-17.268-117.38-48.62

                                    c-31.354-31.354-48.62-73.04-48.62-117.38c0-44.34,17.267-86.026,48.62-117.38C170.391,107.267,212.077,90,256.417,90 M256.417,50

                                    c-113.771,0-206,92.229-206,206s92.229,206,206,206s206-92.229,206-206S370.188,50,256.417,50L256.417,50z M235.171,147.038

                                    c-1.414,11.436-3.995,20.847-7.742,28.249c-3.745,7.406-8.714,13.742-14.91,19.023c-6.193,5.278-13.63,9.335-22.318,12.163v31.618

                                    h24.303v77.772c0,10.135,1.059,17.866,3.187,23.2c2.121,5.337,5.938,10.376,11.441,15.115c5.497,4.739,12.145,8.386,19.941,10.946

                                    c7.79,2.556,16.752,3.837,26.89,3.837c8.931,0,17.241-0.896,24.925-2.687c7.68-1.796,16.265-4.918,25.746-9.381v-34.899

                                    c-11.119,7.306-22.296,10.96-33.525,10.96c-6.322,0-11.939-1.47-16.844-4.42c-3.705-2.174-6.242-5.093-7.605-8.746

                                    c-1.364-3.652-2.042-11.914-2.042-24.778v-56.92h52.698v-34.839h-52.698v-56.214H235.171z"></path>

                                </svg>  </div>
                            <div data-url="https://twitter.com/intent/tweet?text=2013%20Achievements%20%23flickr&amp;url=https%3A%2F%2Fwww.flickr.com%2Fphotos%2Fjoyoflife%2F11793785093" class="share-logo twitter-logo">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

                                <path id="twitter-5-icon" d="M256,90c91.742,0,166,74.244,166,166c0,91.741-74.245,166-166,166c-91.743,0-166-74.245-166-166

                                    C90,164.259,164.244,90,256,90 M256,50C142.229,50,50,142.229,50,256s92.229,206,206,206s206-92.229,206-206S369.771,50,256,50

                                    L256,50z M368.797,201.997c-7.712,3.42-15.999,5.732-24.697,6.771c8.876-5.322,15.696-13.748,18.906-23.79

                                    c-8.311,4.928-17.512,8.506-27.307,10.435c-7.843-8.357-19.02-13.579-31.387-13.579c-27.756,0-48.16,25.902-41.889,52.8

                                    c-35.736-1.793-67.423-18.913-88.63-44.928c-11.265,19.323-5.844,44.61,13.308,57.409c-7.049-0.223-13.682-2.158-19.478-5.379

                                    c-0.466,19.922,13.811,38.552,34.489,42.708c-6.052,1.646-12.681,2.023-19.419,0.735c5.472,17.084,21.354,29.516,40.17,29.862

                                    c-18.079,14.169-40.849,20.495-63.661,17.807c19.028,12.2,41.632,19.32,65.915,19.32c79.834,0,124.939-67.433,122.222-127.911

                                    C355.741,218.194,363.031,210.62,368.797,201.997z"></path>

                                </svg>  </div>

                            <div data-url="https://pinterest.com/pin/create/bookmarklet/?media=https%3A%2F%2Ffarm8.staticflickr.com%2F7426%2F11793785093_7607994aba_z.jpg&amp;url=http%3A%2F%2Frji.local%2Fa11y%2F&amp;description=2013 Achievements - Julie Kertesz" class="share-logo pinterest-logo">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

                                <path id="pinterest-circle-outline-icon" d="M256.417,90c44.34,0,86.026,17.267,117.38,48.62

                                    c31.354,31.354,48.62,73.04,48.62,117.38c0,44.34-17.267,86.026-48.62,117.38c-31.354,31.353-73.04,48.62-117.38,48.62

                                    s-86.026-17.268-117.38-48.62c-31.354-31.354-48.62-73.04-48.62-117.38c0-44.34,17.267-86.026,48.62-117.38

                                    C170.391,107.267,212.077,90,256.417,90 M256.417,50c-113.771,0-206,92.229-206,206s92.229,206,206,206s206-92.229,206-206

                                    S370.188,50,256.417,50L256.417,50z M264.891,149.198c-63.75,0-95.895,45.708-95.895,83.822c0,23.078,8.737,43.609,27.477,51.262

                                    c3.073,1.256,5.827,0.044,6.717-3.358c0.621-2.355,2.088-8.297,2.741-10.769c0.899-3.366,0.552-4.546-1.929-7.479

                                    c-5.403-6.374-8.856-14.626-8.856-26.313c0-33.911,25.37-64.266,66.063-64.266c36.031,0,55.829,22.018,55.829,51.421

                                    c0,38.688-17.122,71.343-42.54,71.343c-14.038,0-24.545-11.609-21.178-25.848c4.034-16.999,11.848-35.343,11.848-47.613

                                    c0-10.983-5.897-20.144-18.098-20.144c-14.351,0-25.878,14.845-25.878,34.73c0,12.665,4.28,21.233,4.28,21.233

                                    s-14.685,62.22-17.258,73.116c-5.128,21.701-0.773,48.305-0.402,50.99c0.215,1.592,2.261,1.971,3.187,0.769

                                    c1.324-1.728,18.416-22.828,24.225-43.91c1.646-5.97,9.44-36.884,9.44-36.884c4.661,8.893,18.287,16.727,32.774,16.727

                                    c43.136,0,72.4-39.324,72.4-91.96C349.839,186.265,316.127,149.198,264.891,149.198z"></path>

                                </svg>  </div>

                        </div>

                <div class="license">Attribution-NonCommercial-NoDerivs</div>

                <div class="title-and-attribution">

                            <div class="title truncate">
                                <a data-rapid="owner" target="_blank" href="https://www.flickr.com/photos/joyoflife/11793785093">2013 Achievements</a>
                            </div>

                        <div class="attribution truncate">
                            <a data-rapid="owner" class="" href="https://www.flickr.com/photos/joyoflife" target="_blank">
                                by Julie Kertesz
                            </a>
                        </div>

                </div>

            </div>

                <div class="branding"><a data-rapid="flickr" target="_blank" href="https://www.flickr.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 50"><path d="M3 23.64H0V20h3.1v-.98c0-4.48 2.1-6.04 6.27-6.04 1.13 0 2 .17 2.66.3l-.32 3.57c-.4-.14-.8-.23-1.6-.23-1.3 0-1.8.93-1.8 2.4V20H12v3.64H8.2v11.38H3V23.64zm11-10.32h5.2v21.7H14v-21.7zm7.8.35h5.22v3.82h-5.2zm0 6.3h5.22V35h-5.2zm19.34 4.3c-.96-.6-1.9-.85-3.15-.85-2.3 0-4 1.56-4 4.17 0 2.3 2 3.9 4.2 3.9 1.2 0 2.35-.3 3.22-.7l.12 3.9c-1.3.4-2.87.6-4.27.6-4.97 0-8.76-2.9-8.76-7.88 0-5 3.8-7.9 8.8-7.9 1.56 0 2.95.24 4.13.82l-.37 3.8zM43.8 13.3H49v12.96h.06l4.34-6.33h5.7l-5.24 6.9L59.53 35h-6.3l-4.17-7.47H49V35h-5.2V13.3zm27.95 10.8c-.58-.16-1.16-.16-1.77-.16-2.43 0-3.8 1.76-3.8 4.72v6.36H61V19.95h4.75v2.78h.06c.9-1.92 2.2-3.13 4.5-3.13.6 0 1.28.1 1.8.17l-.25 4.34z"></path></svg></a></div>


    </div>


</div>


    <script>


            var slideshowCurrentPositionIndex = 0,
                isSlideshow = false;


        var photoSizes = [[{"label":"Square","width":75,"height":75,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_s.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/sq\/","media":"photo","key":"sq"},{"label":"Large Square","width":150,"height":150,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_q.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/q\/","media":"photo","key":"q"},{"label":"Thumbnail","width":100,"height":75,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_t.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/t\/","media":"photo","key":"t"},{"label":"Small","width":240,"height":180,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_m.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/s\/","media":"photo","key":"s"},{"label":"Small 320","width":320,"height":240,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_n.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/n\/","media":"photo","key":"n"},{"label":"Medium","width":500,"height":375,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/m\/","media":"photo","key":"m"},{"label":"Medium 640","width":640,"height":480,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_z.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/z\/","media":"photo","key":"z"},{"label":"Medium 800","width":800,"height":600,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_c.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/c\/","media":"photo","key":"c"},{"label":"Large","width":1024,"height":768,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_7607994aba_b.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/l\/","media":"photo","key":"l"},{"label":"Large 1600","width":1600,"height":1200,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_b6bf9de046_h.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/h\/","media":"photo","key":"h"},{"label":"Large 2048","width":2048,"height":1536,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_a9dd0ecd01_k.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/k\/","media":"photo","key":"k"},{"label":"Original","width":4896,"height":3672,"source":"https:\/\/farm8.staticflickr.com\/7426\/11793785093_03d2bdd770_o.jpg","url":"https:\/\/www.flickr.com\/photos\/joyoflife\/11793785093\/sizes\/o\/","media":"photo","key":"o"}]];
        var photoIds = ["11793785093"];

        !function(){setTimeout(function(){document.querySelector(".flickr-embed").removeAttribute("data-initial-fade")},3e3);var e=[].slice.call(document.getElementsByClassName("truncated-dots")),t=function(e,t,n){var i;return function(){var a=this,r=arguments,o=function(){i=null,n||e.apply(a,r)},s=n&&!i;clearTimeout(i),i=setTimeout(o,t),s&&e.apply(a,r)}};e.length>0&&e.forEach(function(e){e.addEventListener("click",function(e){var t=e.target.parentNode.getElementsByClassName("description")[0],n=e.target.parentNode.getElementsByClassName("description-full")[0];"block"===n.style.display?(n.style.display="none",t.style.display="block"):(t.style.display="none",n.style.display="block"),parent.postMessage({name:"update:height",height:document.body.clientHeight+"px"},"*")})}),window.document.querySelector(".sharing")&&window.document.querySelector(".flickr-embed-photo").addEventListener("click",function(e){if(e.target.classList.contains("share-logo")){e.preventDefault();var t={},n="",i=e.target.getAttribute("data-url"),a="nativeShare"+(new Date).getTime();t.width=640,t.height=480,t.top=(window.screen.height-t.height)/2,t.left=(window.screen.width-t.width)/2;for(var r in t)t.hasOwnProperty(r)&&(n+=r+"="+t[r]+",");n=n.slice(0,-1),window.open(i,a,n)}}),window.addEventListener("resize",t(function(e){isSlideshow||parent.postMessage({name:"update:resize",size:{width:document.body.clientWidth+"px",height:document.body.clientHeight+"px",sizes:photoSizes[slideshowCurrentPositionIndex]}},"*")},150)),window.addEventListener("click",function(e){var t;e.target&&"A"===e.target.nodeName?t={text:e.target.getAttribute("data-rapid"),href:e.target.href||e.target.parentElement.href}:"truncated-dots"===e.target.className&&(t={text:"expand",href:""}),t&&parent.postMessage({name:"beacon:click",text:t.text,href:t.href},"*")})}();
        !function(){var e=[].slice.call(document.getElementsByClassName("slide-video"));e.length>0&&e.forEach(function(e){var t=e.getElementsByTagName("video")[0];t.addEventListener("play",function(e){e.target.parentElement.setAttribute("data-is-playing","")}),t.addEventListener("pause",function(e){e.target.parentElement.removeAttribute("data-is-playing")}),"undefined"==typeof InstallTrigger&&t.addEventListener("click",function(e){e.target.paused?e.target.play():e.target.pause()})})}();


    </script>



</body></html>
