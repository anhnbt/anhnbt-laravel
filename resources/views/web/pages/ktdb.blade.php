@extends('web.layout')

@section('title', $title)
@section('content')
<div class="container">
    <div class="row">
        <div class="eight columns">
<article>
        <header>
            <h1>Kí tự đặc biệt</h1>
            <div class="u-cf u-full-width">
                <img width="40" height="40" src="{{ asset('images/anhnbt.jpg') }}" class="u-pull-left mr-1 avatar" alt="Nguyễn Bá Tuấn Anh Avatar">
                <a href="https://www.facebook.com/anhnbtdotcom" target="_blank" rel="noopener noreferrer nofollow">Nguyễn Bá Tuấn Anh</a>
                <div><time datetime="2021-01-19">19 tháng 1 2021</time></div>
            </div>
        </header>
        <div class="entry-content">
            <p>Xin chào, bạn đang tìm <strong>kí tự đặc biệt</strong> đẹp để tạo tên game hay <em>chữ kiểu TikTok</em>? Tại đây bạn có thể khám phá hàng nghìn kí tự đẹp dành riêng cho mình!</p>
            <p>Bạn có thể chọn Kí tự trái tim (❤), ngôi sao (★), mặt quỷ ╰‿╯ hay ×͜× và nhiều hơn nữa.</p>
            <ul class="list-unstyled">
                <li><a href="/ki-tu-dac-biet-chu-nho.html"><span class="badge bg-danger">Mới</span> Tạo kí tự đặc biệt chữ nhỏ có dấu</a></li>
                <li><a href="/p/trang-tri-van-ban-hoac-tieu-su-facebook.html"><span class="badge bg-primary">Facebook</span> Mẫu trang trí tiểu sử</a></li>
                <li><a href="/p/nhung-cau-hoi-thuong-gap-faq.html"><span class="badge bg-warning text-dark">FAQ</span> Câu hỏi thường gặp</a></li>
            </ul>
            <form method="POST" onsubmit="toPerfectName(); return false;">
                <fieldset class="card bg-light p-1">
                    <legend>Công cụ tạo tên kí tự</legend>
                <label for="myName">Nhập tên của bạn: </label>
                <input type="text" name="myName" id="myName" placeholder="Hoặc nhập tên ingame hay nickname" class="u-full-width" aria-required="true" required>
                <div class="row">
                    <div class="four columns">
                            <label for="symbolLeft">Trái</label>
                            <select name="symbolLeft" id="symbolLeft" class="u-full-width">
                                <option value="">Chọn kí tự bên Trái</option>
                                <option value="꧁༺">꧁༺</option>
                                <option value="◥ὦɧ◤">◥ὦɧ◤</option>
                                <option value="ᴳᵒᵈ乡">ᴳᵒᵈ乡</option>
                                <option value="ᵈʳᵉᵃᵐ乡">ᵈʳᵉᵃᵐ乡</option>
                                <option value="๖ۣۜҨž乡">Ҩž乡</option>
                                <option value="๖ۣۜƝƘ☆">๖ۣۜƝƘ☆</option>
                                <option value="ƒさ→">ƒさ→</option>
                                <option value="ᎮᏁ丶">ᎮᏁ丶</option>
                                <option value="ɱ√ρ︵">ɱ√ρ︵</option>
                                <option value="๖ACE✪">๖ACE✪</option>
                                <option value="ღᏠᎮღ">ღᏠᎮღ</option>
                                <option value="࿐">࿐</option>
                                <option value="๖">๖</option>
                                <option value="๖ۣۜ">๖ۣۜ</option>
                                <option value="ঔ">ঔ</option>
                                <option value="ঌ">ঌ</option>
                                <option value="♚">♚</option>
                                <option value="♕">♕</option>
                                <option value="✿">✿</option>
                                <option value="❄">❄</option>
                                <option value="❤">❤</option>
                                <option value="ツ">ツ</option>
                                <option value="ッ">ッ</option>
                                <option value="☆">☆</option>
                                <option value="‿✿">‿✿</option>
                                <option value="➻❥">➻❥</option>
                                <option value="❖︵">❖︵</option>
                                <option value="‿✶">‿✶</option>
                                <option value="︵✰">︵✰</option>
                                <option value="✎﹏">✎﹏</option>
                                <option value="ミ★">ミ★</option>
                                <option value="☠">☠</option>
                                <option value="❣">❣</option>
                                <option value="➻">➻</option>
                                <option value="ღ">ღ</option>
                                <option value="☂">☂</option>
                                <option value="❦">❦</option>
                                <option value="﹏">﹏</option>
                                <option value="❖">❖</option>
                                <option value="۶">۶</option>
                                <option value="✚">✚</option>
                                <option value="ʚɞ">ʚɞ</option>
                                <option value="╰☜">╰☜</option>
                                <option value="☞╯">☞╯</option>
                                <option value="✔">✔</option>
                                <option value="✾">✾</option>
                                <option value="♥">♥</option>
                                <option value="♪">♪</option>
                                <option value="✌">✌</option>
                                <option value="☝">☝</option>
                                <option value="☥">☥</option>
                                <option value="ッ">ッ</option>
                                <option value="♜">♜</option>
                                <option value="✟">✟</option>
                                <option value="❖">❖</option>
                                <option value="✦">✦</option>
                                <option value="✼">✼</option>
                                <option value="⊹⊱">⊹⊱</option>
                                <option value="⊰⊹">⊰⊹</option>
                                <option value="╰❥">╰❥</option>
                                <option value="↭">↭</option>
                                <option value="❛❜">❛❜</option>
                                <option value="₠">₠</option>
                                <option value="™">™</option>
                                <option value="℠">℠</option>
                                <option value="ᴾᴿᴼシ">ᴾᴿᴼシ</option>
                                <option value="ᵛᶰシ">ᵛᶰシ</option>
                                <option value="๖²⁴ʱ">๖²⁴ʱ</option>
                            </select>
                    </div>
                    <div class="four columns">
                            <label for="symbolCenter">Giữa</label>
                            <select name="symbolCenter" id="symbolCenter" class="u-full-width">
                                <option value="">Chọn kí tự ở Giữa</option>
                                <option value=" ">Dấu cách đặc biệt</option>
                                <option value="乛">乛</option>
                                <option value="๛">๛</option>
                                <option value="丶">丶</option>
                                <option value="•">•</option>
                                <option value="๖">๖</option>
                                <option value="๖ۣۜ">๖ۣۜ</option>
                                <option value="ঔ">ঔ</option>
                                <option value="ঌ">ঌ</option>
                                <option value="♚">♚</option>
                                <option value="♕">♕</option>
                                <option value="✿">✿</option>
                                <option value="❄">❄</option>
                                <option value="❤">❤</option>
                                <option value="☆">☆</option>
                                <option value="☠">☠</option>
                                <option value="❣">❣</option>
                                <option value="➻">➻</option>
                                <option value="✎">✎</option>
                                <option value="ღ">ღ</option>
                                <option value="☂">☂</option>
                                <option value="❦">❦</option>
                                <option value="﹏">﹏</option>
                                <option value="❖">❖</option>
                                <option value="۶">۶</option>
                                <option value="✚">✚</option>
                                <option value="ʚɞ">ʚɞ</option>
                                <option value="✔">✔</option>
                                <option value="✾">✾</option>
                                <option value="♥">♥</option>
                                <option value="♪">♪</option>
                                <option value="✌">✌</option>
                                <option value="☝">☝</option>
                                <option value="☥">☥</option>
                                <option value="ッ">ッ</option>
                                <option value="♜">♜</option>
                                <option value="✟">✟</option>
                                <option value="❖">❖</option>
                                <option value="✦">✦</option>
                                <option value="✼">✼</option>
                                <option value="↭">↭</option>
                            </select>
                    </div>
                    <div class="four columns">
                            <label for="symbolRight">Phải</label>
                            <select name="symbolRight" id="symbolRight" class="u-full-width">
                                <option value="">Chọn kí tự bên Phải</option>
                                <option value="༻꧂">༻꧂</option>
                                <option value="ツ">ツ</option>
                                <option value="ッ">ッ</option>
                                <option value="✿‿">✿‿</option>
                                <option value="࿐">࿐</option>
                                <option value="⁀ᶦᵈᵒᶫ">⁀ᶦᵈᵒᶫ</option>
                                <option value=" ͜✿҈"> ͜✿҈</option>
                                <option value="ঔ">ঔ</option>
                                <option value="ঌ">ঌ</option>
                                <option value="♚">♚</option>
                                <option value="♕">♕</option>
                                <option value="✿">✿</option>
                                <option value="❄">❄</option>
                                <option value="❤">❤</option>
                                <option value="☆">☆</option>
                                <option value="❖︵">❖︵</option>
                                <option value="‿✶">‿✶</option>
                                <option value="︵✰">︵✰</option>
                                <option value="✎﹏">✎﹏</option>
                                <option value="﹏✍">﹏✍</option>
                                <option value="︵❣">︵❣</option>
                                <option value="﹏❣">﹏❣</option>
                                <option value="★彡">★彡</option>
                                <option value="☠">☠</option>
                                <option value="❣">❣</option>
                                <option value="➻">➻</option>
                                <option value="ღ">ღ</option>
                                <option value="☂">☂</option>
                                <option value="❦">❦</option>
                                <option value="❖">❖</option>
                                <option value="۶">۶</option>
                                <option value="✚">✚</option>
                                <option value="ʚɞ">ʚɞ</option>
                                <option value="╰☜">╰☜</option>
                                <option value="☞╯">☞╯</option>
                                <option value="✔">✔</option>
                                <option value="✾">✾</option>
                                <option value="♥">♥</option>
                                <option value="♪">♪</option>
                                <option value="✌">✌</option>
                                <option value="☝">☝</option>
                                <option value="☥">☥</option>
                                <option value="ッ">ッ</option>
                                <option value="⊹⊱">⊹⊱</option>
                                <option value="⊰⊹">⊰⊹</option>
                                <option value="╰❥">╰❥</option>
                                <option value="❛❜">❛❜</option>
                                <option value="₆₇₈₉">₆₇₈₉</option>
                                <option value="︵❻❾">︵❻❾</option>
                                <option value="︵⁸⁸">︵⁸⁸</option>
                                <option value="︵⁹⁰">︵⁹⁰</option>
                                <option value="︵⁹¹">︵⁹¹</option>
                                <option value="︵⁹²">︵⁹²</option>
                                <option value="︵⁹³">︵⁹³</option>
                                <option value="︵⁹⁴">︵⁹⁴</option>
                                <option value="︵⁹⁵">︵⁹⁵</option>
                                <option value="︵⁹⁶">︵⁹⁶</option>
                                <option value="︵⁹⁷">︵⁹⁷</option>
                                <option value="︵⁹⁸">︵⁹⁸</option>
                                <option value="︵⁹⁹">︵⁹⁹</option>
                                <option value="︵²⁰⁰⁰">︵²⁰⁰⁰</option>
                                <option value="︵²⁰⁰¹">︵²⁰⁰¹</option>
                                <option value="︵²⁰⁰²">︵²⁰⁰²</option>
                                <option value="︵²⁰⁰⁴">︵²⁰⁰⁴</option>
                                <option value="︵²⁰⁰⁵">︵²⁰⁰⁵</option>
                                <option value="₠">₠</option>
                                <option value="™">™</option>
                                <option value="℠">℠</option>
                                <option value="ᴾᴿᴼシ">ᴾᴿᴼシ</option>
                                <option value="ᵛᶰシ">ᵛᶰシ</option>
                                <option value="๖²⁴ʱ">๖²⁴ʱ</option>
                            </select>
                    </div>
                </div>
                <button type="submit" class="button button-primary u-full-width">Tạo tên kí tự đặc biệt</button>
                </fieldset>
            </form>
            <div id="result" class="card bg-light p-1 mb-1">Kết quả hiển thị ở đây</div>
            <details open="" class="card-note">
                <summary class="text-primary"><strong>Lưu ý khi đặt tên</strong></summary>
                <ul>
                    <li>Độ dài dưới 12 <em>kí tự đặc biệt</em></li>
                    <li>Không chứa từ ngữ nhạy cảm hoặc bị cấm</li>
                </ul>
            </details>
            
            <section class="all-symbols">
                <h2>Kí tự đặc biệt Quân Đoàn</h2>
                <p><a href="ki-tu/mat-nguy-hiem.html">╰‿╯</a><a href="ki-tu/gk-funky.html">ĜKヽ</a><a href="ki-tu/top1.html">Ťøp❶</a><a href="ki-tu/pro.html">Prø丶</a><a href="ki-tu/ga.html">➻❥Ğà</a><a href="ki-tu/king.html">Ƙiйɠツ</a><a href="ki-tu/boss.html">ßσss™</a><a href="ki-tu/star-2.html">Štār☆</a><a href="ki-tu/mvp.html">ɱ√ρ︵</a><a href="ki-tu/qd.html">༄༂QĐ乛</a><a href="ki-tu/vn.html">VŇ•</a><a href="ki-tu/clear.html">ミÇlєαr</a><a href="ki-tu/sml.html">ŠM£✿</a><a href="ki-tu/ae.html">AE☞</a><a href="ki-tu/club.html">»Člub</a><a href="ki-tu/ff.html">︵₣F•</a><a href="ki-tu/top.html">๖ۣۜŤOP✮</a><a href="ki-tu/team.html">Ťëaɱᴭ</a><a href="ki-tu/crush.html">๖₢ush</a></p>
                <h2 id="related">Tên hay nhất cho Liên Quân</h2>
                <div class="alert text-normal" role="alert">Một số ký tự hay ký hiệu trên trang web này yêu cầu hệ điều hành Android 6.0 và iOS 10.0 trở lên.</div>
                <!-- <div class="fb-comments" data-href="https://anhnbt.com/ky-tu-dac-biet" data-numposts="5" data-width="100%" data-order-by="reverse_time"></div> -->
            </section>
            <section class="all-symbols">
                <div class="mb-2">
                    <label for="kyturong" class="text-normal">Dấu cách đặc biệt</label>
                    <div class="form-group">
                        <input type="text" name="kyturong" id="kyturong" class="u-full-width" value=" " onfocus="this.select();" onmouseup="return false;">
                    </div>
                    <p class="text-normal">Chạm vào ô bên trên để sao chép kí tự dấu cách (hiện tại không còn hỗ trợ cho game Liên Quân LQ Mobile).</p>
                </div>
                <h3>Những ký tự đẹp trong FF</h3>
                <div class="text-center">
                    <picture>
                        <source media="(max-width: 799px)" srcset="{{ asset('images/ki-tu-dac-biet-anhnbt-480w.jpg') }}">
                        <source media="(min-width: 800px)" srcset="{{ asset('images/ki-tu-dac-biet-anhnbt.jpg') }}">
                        <img width="480" height="270" src="{{ asset('images/ki-tu-dac-biet-anhnbt.jpg') }}" alt="Kí tự đặc biệt" class="responsive-image" loading="lazy">
                    </picture>
                </div>
                <p>Kí tự tàng hình trong game Freefire: ❍ ❏ ❐ ❑ ❒</p>
                <p>๖ۣ•҉ 𓅂 ☻ ☹ ۵ 𖤍 ߹߬ ⋆͙̈ 𒀱ꪳ 𒋨 ࿐ཽ༵ ࿋ོ༙ ཉིཾ ཉྀ ꒰ ꒱ ઈ ઉ ɷ ๑ ⊰ ⊱ ʚ ɞ � 𖤍 ۝ ♆</p>
                <p>٭ ㍍ ᬊ ᭄ Ƀ͢Ƀ ㉺ ҂ 𐂡 𖣘 ✰ཽ 𒅒 ⫷ ⫸ 𒁂 𒈒 𒈞 ⎳ ههههه هز ஓ 𖤍 ث ଐ -`ღ´- ⚚ ༁ ༆ ༉ ༊</p>
                <p>࿐ ๛ ཉ ེ ར ཏ ཡ ུ ི ོ པ ལ ཀ ཇ ཧ ག ང ད ས འ ཟ ཛ ཅ ཙ བ ན མ ་ ྃ ཾ ྆ ྆ ྇ ྈ ྉ ྊ ྅ ྋ ཎ བ ཚ ཆ ཥ ཞླ ཁ ཇ ཿ</p>
                <p> ཽ ྀ ྭ ྱ ྲ ཻ ཝ ཨ ༅ ༄ ࿓ ࿔ ༇ ࿑ ༈ ༀ ༂ ༃ ༎ ། ༏ ༐ ༑ ༒ ༓ ༔ ༵ ༷ ༴ ༶ ༚ ༛ ༜ ༝ ༞ ༟ ࿏ ༸ ྾ ྿ ࿀ ࿁ ࿃ ࿄ ࿆ ࿅ ࿇ ࿈</p>
                <p>࿂ ࿉ ࿊ ࿋ ࿌ ༕ ༖ ༳ ༪ ༫ ༬ ༭ ༮ ༯ ༰ ༱ ༲ ༗ ༿ ༾ ༘ ༙ ༼ ༽ ༺ ༻ ༡ ༢ ༣ ༤ ༥ ༦ ༧ ༨ ༩ ༠ ෴ 🍾 ✌</p>
                <p>Ⓐ ✍ ✎ © ® ™ Σ ✿ ⚑ 웃 유 ℂ ℍ ℕ ℙ ℚ ℝ ℤ ℬ ℰ ℯ ℱ ℊ ℋ ℎ ℐ ℒ ℓ ℳ ℴ ℘ ℛ ℭ ℮ ℌ ℑ ℜ ℨ</p>
                <p class="text-normal"><strong>1001 kí tự đặc biệt</strong> không thể tổng hợp hết vào trong bài viết này. Nếu bạn không tìm được ký tự mong muốn; Bạn có thể tìm hiểu thêm trên <a href="https://kitudacbiet.com/" target="_blank" rel="noopener noreferrer nofollow">kítudacbiet.com</a> và <a href="https://kitudacbiet.com.vn/" target="_blank" rel="noopener noreferrer nofollow">kitudacbiet.com.vn</a> hoặc nhắn tin cho mình để được hỗ trợ riêng nhé!</p>
                <figure>
                    <img width="476" height="507" src="{{ asset('images/character-map-windows-10.png') }}" alt="Character Map Windows 10" class="responsive-image" loading="lazy">
                    <figcaption class="text-center">Character Map Windows 10.</figcaption>
                </figure>
                <p class="text-normal">Ngoài ra, bạn có thể lấy được rất nhiều ký tự có sẵn trên Windows 10 có tên là <strong>Character Map</strong>. Chỉ cần vài thao tác Chọn (Select); Sao chép (Copy) và <kbd>Ctrl</kbd> + <kbd>V</kbd> (Paste) trên máy tính là có thể sử dụng được.</p>
                <p class="text-center">()==[:::::::::::::><br>
                    ▬▬ι═══════ﺤ<br>
                    -═══════ι▬▬<br>
                    ┣▇▇▇═─<br>
                    ●▬▬▬▬๑۩۩๑▬▬▬▬▬●<br>
                    █▬█ █ ▀█▀<br><br>
                    █▄▄ ███ █▄▄<br><br>
                    ︻┳═一<br><br>
                    ︻╦̵̵͇̿̿̿̿╤──<br><br>
                    ⌐╦╦═─<br><br>
                    ︻┳デ═—<br><br>
                    ▄︻̷̿┻̿═━一<br><br>
                    ╾━╤デ╦︻<br><br>
                    Ⓞ═╦╗</p>
                <h3 id="ki-tu-ngoi-sao">Kí tự ngôi sao - bông hoa</h3>
                <p>✲ ⋆ ❄ ❅ ❇ ❈ ❖ ✫ ✪ ✩ ✬ ✮ ✭ ✯ ✰ ✹ ✸ ✷ ✶ ✵ ✳ ✱ ❊ ❉ ✾ ✽ ✼ ✠ ☆ ★ ✡ ✴ ✺ ☼ ☸ ❋ ✽ ✻ ❆ ۞ ۝ ☀ ❃ ❂ ✿ ❀ ❁</p>
                <p>Kí tự Cỏ 3 lá <code>☘</code>, Hoa năm cánh (Cỏ 4 lá): <code>❀</code>, Quả táo Apple <code></code></p>
                <p>Dấu cộng nhỏ phía trên: <code>⁺</code></p>
                <h3 id="ki-tu-trai-tim">Kí tự trái tim tình yêu</h3>
                <p>💕 ❤ ❥ ♥ ♡ ♥ ❣ ❦ ❧ ☙ ღ ɞ 💖</p>
                <h3>Kí tự mũi tên</h3>
                <p>← ↑ → ↓ ↔ ↕ ↖ ↗ ↘ ↙ ↚ ↛ ↜ ↝ ↞ ↟</p>
                <p>↠ ↡ ↢ ↣ ↤ ↥ ↦ ↧ ↨ ↩ ↪ ↫ ↬ ↭ ↮ ↯</p>
                <p>↰ ↱ ↲ ↳ ↴ ↵ ↶ ↷ ↸ ↹ ↺ ↻ ↼ ↽ ↾ ↿</p>
                <p>⇀ ⇁ ⇂ ⇃ ⇄ ⇅ ⇆ ⇇ ⇈ ⇉ ⇊ ⇋ ⇌ ⇍ ⇎ ⇏</p>
                <p>⇐ ⇑ ⇒ ⇓ ⇔ ⇕ ⇖ ⇗ ⇘ ⇙ ⇚ ⇛ ⇜ ⇝ ⇞ ⇟</p>
                <p>⇠ ⇡ ⇢ ⇣ ⇤ ⇥ ⇦ ⇧ ⇨ ⇩ ⇪ ⇫ ⇬ ⇭ ⇮ ⇯</p>
                <p>⇰ ⇱ ⇲ ⇳ ⇴ ⇵ ⇶ ⇷ ⇸ ⇹ ⇺ ⇻ ⇼ ⇽ ⇾ ⇿</p>
                <h3>Kí tự nốt Nhạc</h3>
                <p class="text-center text-normal">
                    14:10 ───────────●─── 20:18<br>
                    ⇆ㅤ◁ㅤ ❚❚ㅤ ▷ㅤ↻-<br>
                    ▶ ●─────────── 5:35<br>
                    ▂ ▄ ▅ ▇ █ ♪♫♥ MUSIC IS MY LIFE ♥♪♫ █ ▇ ▆ ▄ ▂ <br>
                    ♩ ♪ ♫ ♬ ♭ ♮ ♯ 𝄪 𝄆 𝄇 𝄈 𝄐 𝄑 𝄒 𝆒 𝆓 𝄫 𝄞 𝄢 𝄡 ☊ ☋ ✦ ✧</p>
                <h3>Kí tự dấu tích, đầu dòng</h3>
                <p>• ‣ ⁃ ◘ ◦ « » ❞ ❝ ˇ ∛ ∜ ☐ ☑ ☒ ✓ ✔ ✗ ✘ ∨ √</p>
                <h3>Kí tự số</h3>
                <p>⅟ ¼ ½ ⅓ ⅔ ¾ ⅕ ⅐ ⅑ ⅒</p>
                <p> ¹⁹⁹⁹ - ¹ᵏ⁹ - ₁₉₉₉ - ₁ₖ₉<br>
                    ²⁰⁰⁰ - ²ᵏ - ₂₀₀₀ - ₂ₖ<br>
                    ²⁰⁰¹ - ²ᵏ¹ - ₂₀₀₁ - ₂ₖ₁<br>
                    ²⁰⁰² - ²ᵏ² - ₂₀₀₂ - ₂ₖ₂<br>
                    ²⁰⁰³ - ²ᵏ³ - ₂₀₀₃ - ₂ₖ₃<br>
                    ²⁰⁰⁴ - ²ᵏ⁴ - ₂₀₀₄ - ₂ₖ₄<br>
                    <span class="text-normal">Số nhỏ trên đầu</span> ⁰ ¹ ² ³ ⁴ ⁵ ⁶ ⁷ ⁸ ⁹<br>
                    <span class="text-normal">Số nhỏ bên dưới</span>: ₀ ₁ ₂ ₃ ₄ ₅ ₆ ₇ ₈ ₉</p>
                <p>⓿ ❶ ❷ ❸ ❹ ❺ ❻ ❼ ❽ ❾ ❿ ➀ ➁ ➂ ➃ ➄ ➅ ➆ ➇ ➈ ➉ ➊ ➋ ➌ ➍ ➎ ➏ ➐ ➑ ➒ ➓</p>
                <h3>Ký tự cho game Free Fire, Fifa</h3>
                <p>☀ ☁ ☂ ☃ ☄ ★ ☆ ☇ ☈ ☉ ☊ ☋ ☌ ☍ ☎ ☏</p>
                <p>☐ ☑ ☒ ☓ ☔ ☕ ☖ ☗ ☘ ☙ ☚ ☛ ☜ ☝ ☞ ☟</p>
                <p>☠ ☡ ☢ ☣ ☤ ☥ ☦ ☧ ☨ ☩ ☪ ☫ ☬ ☭ ☮ ☯</p>
                <p>☰ ☱ ☲ ☳ ☴ ☵ ☶ ☷ ☸ ☹ ☺ ☻ ☼ ☽ ☾ ☿</p>
                <p>♀ ♁ ♂ ♃ ♄ ♅ ♆ ♇ ♈ ♉ ♊ ♋ ♌ ♍ ♎ ♏</p>
                <p>♐ ♑ ♒ ♓ ♔ ♕ ♖ ♗ ♘ ♙ ♚ ♛ ♜ ♝ ♞ ♟</p>
                <p>♠ ♡ ♢ ♣ ♤ ♥ ♦ ♧ ♨ ♩ ♪ ♫ ♬ ♭ ♮ ♯</p>
                <p>♰ ♱ ♲ ♳ ♴ ♵ ♶ ♷ ♸ ♹ ♺ ♻ ♼ ♽ ♾ ♿</p>
                <p>⚀ ⚁ ⚂ ⚃ ⚄ ⚅ ⚆ ⚇ ⚈ ⚉ ⚊ ⚋ ⚌ ⚍ ⚎ ⚏</p>
                <p>⚐ ⚑ ⚒ ⚓ ⚔ ⚕ ⚖ ⚗ ⚘ ⚙ ⚚ ⚛ ⚜ ⚝ ⚞ ⚟</p>
                <p>⚠ ⚡ ⚢ ⚣ ⚤ ⚥ ⚦ ⚧ ⚨ ⚩ ⚪ ⚫ ⚬ ⚭ ⚮ ⚯</p>
                <p>⚰ ⚱ ⚲ ⚳ ⚴ ⚵ ⚶ ⚷ ⚸ ⚹ ⚺ ⚻ ⚼ ⚽ ⚾ ⚿</p>
                <p>⛀ ⛁ ⛂ ⛃ ⛄ ⛅ ⛆ ⛇ ⛈ ⛉ ⛊ ⛋ ⛌ ⛍ ⛎ ⛏</p>
                <p>⛐ ⛑ ⛒ ⛓ ⛔ ⛕ ⛖ ⛗ ⛘ ⛙ ⛚ ⛛ ⛜ ⛝ ⛞ ⛟</p>
                <p>⛠ ⛡ ⛢ ⛣ ⛤ ⛥ ⛦ ⛧ ⛨ ⛩ ⛪ ⛫ ⛬ ⛭ ⛮ ⛯</p>
                <p>⛰ ⛱ ⛲ ⛳ ⛴ ⛵ ⛶ ⛷ ⛸ ⛹ ⛺ ⛻ ⛼ ⛽ ⛾ ⛿</p>
                <p>◔ ⌘ ｡◕‿◕｡ ツت ヅ ッ シ ٿ</p>
                <p>⊙ ☉ ☌ ☍ ⌒ ❛❜ ❝ ❞【】 〖 〗 『 』 ◢ ◣ ◥ ◤</p>
                <p>₠ ₡ ₢ ₣ ₤ ₥ ₦ ₧ ₨ ₩ ₪ ₫ € ₭ ₮ ₯ ₰ ₱ ₲ ₳ ₴ ₵ ₶ ₷ ₸ ₹ ₺ ₻ ₼ ₽ ₾ ₿</p>
                <h2>Bảng ký tự đặc biệt (Chữ kiểu đẹp) </h2>
                <p>๖ۣۜA ๖ۣۜB ๖ۣۜC ๖ۣۜD ๖ۣۜE ๖ۣۜF ๖ۣۜG ๖ۣۜH ๖ۣۜI ๖ۣۜJ ๖ۣۜK ๖ۣۜL ๖ۣۜM ๖ۣۜN ๖ۣۜO ๖ۣۜP ๖ۣۜQ ๖ۣۜR ๖ۣۜS ๖ۣۜT ๖ۣۜU ๖ۣۜW ๖ۣۜV ๖ۣۜX ๖ۣۜY ๖ۣۜZ</p>
                <p>ŠǤṖ丶Ɓâɴցց - ŠǤṖ丶ƁŗօהžeѴ - ŠǤṖ丶ẔєŗєҒ - ŠǤṖ丶Ʀєď - ŠǤṖ丶しạς しạς - ŠǤṖ丶NŦƁ - ŠǤṖ丶Ƴɑᘻɑƚe</p>
                <p class="text-normal">Tập hợp các chữ cái nhỏ xíu để ghép tên giống Idol, i am:</p>
                <p>ᴀ ʙ ᴄ ᴅ ᴇ ғ ɢ ʜ ɪ ᴊ ᴋ ʟ ᴍ ɴ ᴏ ᴘ ǫ ʀ s ᴛ ᴜ ᴠ ᴡ x ʏ ᴢ</p>
                <p>ᵃ ᵇ ᶜ ᵈ ᵉ ᶠ ᵍ ʰ ᶦ ʲ ᵏ ˡ ᵐ ⁿ ᵒ ᵖ ᑫ ʳ ˢ ᵗ ᵘ ᵛ ʷ ˣ ʸ ᶻ ⁰ ¹ ² ³ ⁴ ⁵ ⁶ ⁷ ⁸ ⁹</p>
                <p>ᴬ ᴮ ᑦ ᴰ ᴱ ᴳ ᴴ ᴵ ᴷ ᴸ ᴹ ᔿ ᴺ ᴼ ᴾ ᴿ ᵀ ᵁ ᵂ ᵡ ᵞ ʸ ᙆ</p>
                <p>ₐ ᵦ 𝒸 𝒹 ₑ 𝒻 𝓰 ₕ ᵢ ⱼ ₖ ₗ ₘ ₙ ₒ ₚ ᵩ ᵣ ₛ ₜ ᵤ ᵥ 𝓌 ₓ ᵧ 𝓏 ₀ ₁ ₂ ₃ ₄ ₅ ₆ ₇ ₈ ₉</p>
                <p>¡ ¢ £ ¤ ¥ ¦ § ¨ © ª « ¬ ® ¯ ° ± ² ³ ´ µ ¶ · ¸ ¹ º » ¼ ½ ¾ ¿ À Á Â Ã Ä Å Æ Ç È É Ê Ë Ì Í Î Ï Ð Ñ Ò Ó Ô Õ Ö × Ø Ù Ú Û Ü Ý Þ ß à á â ã ä å æ ç è é ê ë ì í î ï ð ñ ò ó ô õ ö ÷ ø ù ú û ü ý þ ÿ</p>
                <p>Ā ā Ă ă Ą ą Ć ć Ĉ ĉ Ċ ċ Č č Ď ď Đ đ Ē ē Ĕ ĕ Ė ė Ę ę Ě ě Ĝ ĝ Ğ ğ Ġ ġ Ģ ģ Ĥ ĥ Ħ ħ Ĩ ĩ Ī ī Ĭ ĭ Į į İ ı Ĳ ĳ Ĵ ĵ Ķ ķ ĸ Ĺ ĺ Ļ ļ Ľ ľ Ŀ ŀ Ł ł Ń ń Ņ ņ Ň ň ŉ Ŋ ŋ Ō ō Ŏ ŏ Ő ő Œ œ Ŕ ŕ Ŗ ŗ Ř ř Ś ś Ŝ ŝ Ş ş Š š Ţ ţ Ť ť Ŧ ŧ Ũ ũ Ū ū Ŭ ŭ Ů ů Ű ű Ų ų Ŵ ŵ Ŷ ŷ Ÿ Ź ź Ż ż Ž ž ſ</p>
                <p>ƀ Ɓ Ƃ ƃ Ƅ ƅ Ɔ Ƈ ƈ Ɖ Ɗ Ƌ ƌ ƍ Ǝ Ə Ɛ Ƒ ƒ Ɠ Ɣ ƕ Ɩ Ɨ Ƙ ƙ ƚ ƛ Ɯ Ɲ ƞ Ɵ Ơ ơ Ƣ ƣ Ƥ ƥ Ʀ Ƨ ƨ Ʃ ƪ ƫ Ƭ ƭ Ʈ Ư ư Ʊ Ʋ Ƴ ƴ Ƶ ƶ Ʒ Ƹ ƹ ƺ ƻ Ƽ ƽ ƾ ƿ ǀ ǁ ǂ ǃ Ǆ ǅ ǆ Ǉ ǈ ǉ Ǌ ǋ ǌ Ǎ ǎ Ǐ ǐ Ǒ ǒ Ǔ ǔ Ǖ ǖ Ǘ ǘ Ǚ ǚ Ǜ ǜ ǝ Ǟ ǟ Ǡ ǡ Ǣ ǣ Ǥ ǥ Ǧ ǧ Ǩ ǩ Ǫ ǫ Ǭ ǭ Ǯ ǯ ǰ Ǳ ǲ ǳ Ǵ ǵ Ƕ Ƿ Ǹ ǹ Ǻ ǻ Ǽ ǽ Ǿ ǿ Ȁ ȁ Ȃ ȃ Ȅ ȅ Ȇ ȇ Ȉ ȉ Ȋ ȋ Ȍ ȍ Ȏ ȏ Ȑ ȑ Ȓ ȓ Ȕ ȕ Ȗ ȗ Ș ș Ț ț Ȝ ȝ Ȟ ȟ Ƞ ȡ Ȣ ȣ Ȥ ȥ Ȧ ȧ Ȩ ȩ Ȫ ȫ Ȭ ȭ Ȯ ȯ Ȱ ȱ Ȳ ȳ ȴ ȵ ȶ ȷ ȸ ȹ Ⱥ Ȼ ȼ Ƚ Ⱦ ȿ ɀ Ɂ ɂ Ƀ Ʉ Ʌ Ɇ ɇ Ɉ ɉ ɐ Ɋ ɋ Ɍ ɍ Ɏ ɏ</p>
                <p>Ḃ ḃ Ḋ ḋ Ḟ ḟ Ṁ ṁ Ṗ ṗ Ṡ ṡ Ṫ ṫ Ẁ ẁ Ẃ ẃ Ẅ ẅ ẛ Ỳ ỳ</p>
                <p>Ͱ ͱ Ͳ ͳ ʹ ͵ Ͷ ͷ ͺ ͻ ͼ ͽ ; Ϳ ΄ ΅ Ά · Έ Ή Ί Ό Ύ Ώ ΐ Α Β Γ Δ Ε Ζ Η Θ Ι Κ Λ Μ Ν Ξ Ο Π Ρ Σ Τ Υ Φ Χ Ψ Ω Ϊ Ϋ ά έ ή ί ΰ α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ ς σ τ υ φ χ ψ ω ϊ ϋ ό ύ ώ Ϗ ϐ ϑ ϒ ϓ ϔ ϕ ϖ ϗ Ϙ ϙ Ϛ ϛ Ϝ ϝ Ϟ ϟ Ϡ ϡ Ϣ ϣ Ϥ ϥ Ϧ ϧ Ϩ ϩ Ϫ ϫ Ϭ ϭ Ϯ ϯ ϰ ϱ ϲ ϳ ϴ ϵ ϶ Ϸ ϸ Ϲ Ϻ ϻ ϼ Ͻ Ͼ Ͽ</p>
                <p>Ѐ Ё Ђ Ѓ Є Ѕ І Ї Ј Љ Њ Ћ Ќ Ѝ Ў Џ А Б В Г Д Е Ж З И Й К Л М Н О П Р С Т У Ф Х Ц Ч Ш Щ Ъ Ы Ь Э Ю Я а б в г д е ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я ѐ ё ђ ѓ є ѕ і ї ј љ њ ћ ќ ѝ ў џ Ѡ ѡ Ѣ ѣ Ѥ ѥ Ѧ ѧ Ѩ ѩ Ѫ ѫ Ѭ ѭ Ѯ ѯ Ѱ ѱ Ѳ ѳ Ѵ ѵ Ѷ ѷ Ѹ ѹ Ѻ ѻ Ѽ ѽ Ѿ ѿ Ҁ ҁ ҂ ҃ ҄ ҅ ҆ ҇ ҈ ҉ Ҋ ҋ Ҍ ҍ Ҏ ҏ Ґ ґ Ғ ғ Ҕ ҕ Җ җ Ҙ ҙ Қ қ Ҝ ҝ Ҟ ҟ Ҡ ҡ Ң ң Ҥ ҥ Ҧ ҧ Ҩ ҩ Ҫ ҫ Ҭ ҭ Ү ү Ұ ұ Ҳ ҳ Ҵ ҵ Ҷ ҷ Ҹ ҹ Һ һ Ҽ ҽ Ҿ ҿ Ӏ Ӂ ӂ Ӄ ӄ Ӆ ӆ Ӈ ӈ Ӊ ӊ Ӌ ӌ Ӎ ӎ ӏ Ӑ ӑ Ӓ ӓ Ӕ ӕ Ӗ ӗ Ә ә Ӛ ӛ Ӝ ӝ Ӟ ӟ Ӡ ӡ Ӣ ӣ Ӥ ӥ Ӧ ӧ Ө ө Ӫ ӫ Ӭ ӭ Ӯ ӯ Ӱ ӱ Ӳ ӳ Ӵ ӵ Ӷ ӷ Ӹ ӹ Ӻ ӻ Ӽ ӽ Ӿ ӿ</p>
                <h3>Bộ chữ cái Harry Potter</h3>
                <p>𝔞 𝔟 𝔠 𝔡 𝔢 𝔣 𝔤 𝔥 𝔦 𝔧 𝓀 𝔩 𝔪 𝔫 𝔬 𝔭 𝔮 𝔯 𝔰 𝔱 𝔲 𝓋 𝔴 𝔵 𝓎 𝓏</p>
                <p>𝔄 𝔅 ℭ 𝔇 𝔈 𝔉 𝔊 ℌ 𝓘 𝔍 𝔎 𝔏 𝔐 𝔑 𝔒 𝔓 𝔔 ℜ 𝔖 𝔗 𝔘 𝔙 𝔚 𝔛 𝔜 𝒵</p>
                <h3>Bộ chữ cái, chữ số ruột rỗng</h3>
                <p>𝟘 𝟙 𝟚 𝟛 𝟜 𝟝 𝟞 𝟟 𝟠 𝟡</p>
                <p>𝕒 𝕓 𝕔 𝕕 𝕖 𝕗 𝕘 𝕙 𝕚 𝕛 𝕜 𝕝 𝕞 𝕟 𝕠 𝕡 𝕢 𝕣 𝕤 𝕥 𝕦 𝕧 𝕨 𝕩 𝕪 𝕫</p>
                <p>𝔸 𝔹 ℂ 𝔻 𝔼 𝔽 𝔾 ℍ 𝕀 𝕂 𝕁 𝕃 𝕄 ℕ 𝕆 ℙ ℚ ℝ 𝕊 𝕋 𝕌 𝕍 𝕎 𝕏 𝕐 ℤ</p>
                <h3>Kí tự khoảng trống</h3>
                <p>Ａ Ｂ Ｃ Ｄ Ｅ Ｆ Ｇ Ｈ Ｉ Ｊ Ｋ Ｌ Ｍ Ｎ Ｏ Ｐ Ｑ Ｒ Ｓ Ｔ Ｕ Ｖ Ｗ Ｘ Ｙ Ｚ</p>
                <p>ａ ｂ ｃ ｄ ｅ ｆ ｇ ｈ ｉ ｊ ｋ ｌ ｍ ｎ ｏ ｐ ｑ ｒ ｓ ｔ ｕ ｖ ｗ ｘ ｙ ｚ</p>
                <h3>Bảng Unicode chữ Thái Lan</h3>
                <p>ก ข ฃ ค ฅ ฆ ง จ ฉ ช ซ ฌ ญ ฎ ฏ ฐ ฑ ฒ ณ ด ต ถ ท ธ น บ ป ผ ฝ พ ฟ ภ ม ย ร ฤ ล ฦ ว ศ ษ ส ห ฬ อ ฮ ฯ ะ ั า ำ ิ ี ึ ื ุ ู ฺ ฿ เ แ โ ใ ไ ๅ ๆ ็ ่ ้ ๊ ๋ ์ ํ ๎ ๏ ๐ ๑ ๒ ๓ ๔ ๕ ๖ ๗ ๘ ๙ ๚ ๛</p>
                <h3>Bảng chữ cái Trung Quốc</h3>
                <p>㊊ ㊋ ㊌ ㊍ ㊎ ㊏ ㊐ ㊑ ㊒ ㊓ ㊔ ㊕ ㊖ ㊗ ㊘ ㊙ ㊚ ㊛ ㊜ ㊝ ㊞ ㊟ ㊠ ㊡ ㊢ ㊣ ㊤ ㊥ ㊦ ㊧ ㊨ ㊩ ㊪ ㊫ ㊬ ㊭ ㊮ ㊯ ㊰</p>
                <h3>Bảng chữ cái Nhật Bản</h3>
                <p>ぁ あ ぃ い ぅ う ぇ え ぉ お か が き ぎ く ぐ け げ こ ご さ ざ し じ す ず せ ぜ そ ぞ た だ ち ぢ っ つ づ て で と ど な に ぬ ね の は ば ぱ ひ び ぴ ふ ぶ ぷ へ べ ぺ ほ ぼ ぽ ま み む め も ゃ や ゅ ゆ ょ よ ら り る れ ろ ゎ わ ゐ ゑ を ん ゔ ゕ ゖ ゚ ゛ ゜ ゝ ゞ ゟ ゠ ァ ア ィ イ ゥ ウ ェ エ ォ オ カ ガ キ ギ ク グ ケ ゲ コ ゴ サ ザ シ ジ ス ズ セ ゼ ソ ゾ タ ダ チ ヂ ッ ツ ヅ テ デ ト ド ナ ニ ヌ ネ ノ ハ バ パ ヒ ビ ピ フ ブ プ ヘ ベ ペ ホ ボ ポ マ ミ ム メ モ ャ ヤ ュ ユ ョ ヨ ラ リ ル レ ロ ヮ ワ ヰ ヱ ヲ ン ヴ ヵ ヶ ヷ ヸ ヹ ヺ ・ ー ヽ ヾ ヿ ㍐ ㍿</p>
                <h3>Bảng chữ cái Hàn Quốc</h3>
                <p>ㄱ ㄲ ㄳ ㄴ ㄵ ㄶ ㄷ ㄸ ㄹ ㄺ ㄻ ㄼ ㄽ ㄾ ㄿ ㅀ ㅁ ㅂ ㅃ ㅄ ㅅ ㅆ ㅇ ㅈ ㅉ ㅊ ㅋ ㅌ ㅍ ㅎ ㅏ ㅐ ㅑ ㅒ ㅓ ㅔ ㅕ ㅖ ㅗ ㅘ ㅙ ㅚ ㅛ ㅜ ㅝ ㅞ ㅟ ㅠ ㅡ ㅢ ㅥ ㅦ ㅧ ㅨ ㅩ ㅪ ㅫ ㅬ ㅭ ㅮ ㅯ ㅰ ㅱ ㅲ ㅳ ㅴ ㅵ ㅶ ㅷ ㅸ ㅹ ㅺ ㅻ ㅼ ㅽ ㅾ ㅿ ㆀ ㆁ ㆂ ㆃ ㆄ ㆅ ㆆ ㆇ ㆈ ㆉ ㆊ</p>
                <h2>Mặt cười phổ biến</h2>
                <p class="text-center">
                    ¯\_(ツ)_/¯<br>
                    Lenny Face ( ͡° ͜ʖ ͡°)<br>
                    ಠ_ಠ<br>
                    (▀̿Ĺ̯▀̿ ̿)<br>
                    ٩(●ᴗ●)۶<br>
                    ʕ•ᴥ•ʔ<br>
                    (;￣◇￣)<br>
                    (՞•ﻌ•՞)۶<br>
                    ๑•̀ㅁ•́๑</p>
            </section><!-- /.symbols -->
        </div><!-- .entry-content -->
    </article>
        </div><!-- /.eight columns -->
        <aside class="four columns sticky">
            <div class="card mb-1">
            <img src="{{ asset('images/ki-tu-dac-biet-anhnbt.jpg') }}" class="u-full-width">
                <div class="card-body">
                    <h4><strong>Nguyễn Bá Tuấn Anh</strong></h4>
                    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                </div>
            </div>
        </aside>
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection