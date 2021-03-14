@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))

@section('title','My Blog')

@section('subheading','Here is my blog')

@section('main-content')
<!-- Main Content -->
    <div id="___gatsby">
      <div tabindex="-1" id="gatsby-focus-wrapper" style="outline: none;">
          <header></header>
          <div>
            <div tabindex="-1" style="outline: none;">
                <div>
                  <div class="indexPage__BackgroundColor-jyyslb-0 dHkxMI"></div>
                  <div class="indexPage__BackgroundImage-jyyslb-1 bkwuBv"></div>
                  <div class="indexPage__WrapperContent-jyyslb-2 cqyxOX">
                      <div class="indexPage__Card-jyyslb-3 hUDEkM">
                        <div style="margin-top: -8px;">
                            <form action="#">
                              <label id="input-e89fca48-cc1a-4cc8-ad72-5a2ec45c4dbc" class="fieldCommon__Wrapper-y8vmfx-0 iSpxfU">
                                  <input type="text" list="b8001cfa-72c0-4989-bc17-8561561c1b43" autocorrect="off" autocapitalize="off" spellcheck="false" name="desiredAmount" inputmode="numeric" class="input__Input-pyyoxr-1 jyUKGa primary-color" value=" triệu đồng">
                                  <datalist id="b8001cfa-72c0-4989-bc17-8561561c1b43">
                                    <option value="10">10 triệu đồng</option>
                                    <option value="20">20 triệu đồng</option>
                                    <option value="50">50 triệu đồng</option>
                                    <option value="80">80 triệu đồng</option>
                                    <option value="100">100 triệu đồng</option>
                                  </datalist>
                                  <span class="fieldCommon__Label-y8vmfx-1 fqrfhS">Số tiền cần vay</span>
                              </label>
                              <label id="input-538c24fb-b0b8-4e4e-9e6b-a054056ba0c9" class="fieldCommon__Wrapper-y8vmfx-0 fLXCrh"><input type="tel" autocorrect="off" autocapitalize="off" spellcheck="false" name="phoneNumber" inputmode="tel" class="input__Input-pyyoxr-1 jyUKGa" value=""><span class="fieldCommon__Label-y8vmfx-1 hjDLFI">Nhập số điện thoại để được liên hệ</span></label>
                              <button class="button__Button-sc-18ja9pt-0 ivIMOb mt-4 submit-register" type="button" tabindex="0">Xem kết quả</button>
                              <div class="text-center mt-4 px-4"><span class="typography__Caption-xnobu1-9 jIpvmC">Bằng cách nhấp vào nút <strong>Xem kết quả</strong>, tôi đã đọc và đồng ý với các <a class="button__ButtonLink-sc-18ja9pt-1 iWelvS" style="color: rgb(89 12 92);">Điều khoản sử dụng dịch vụ</a> của TPBank</span></div>
                            </form>
                        </div>
                      </div>
                      <div class="indexPage__Card-jyyslb-3 hUDEkM mt-3" style="padding-bottom: 5px;">
                        <div class="slick-carousel">
                             <div>
                                <div class="d-flex flex-column align-items-center text-center px-3" tabindex="-1" style="width: 100%; display: inline-block;">
                                  <img src="/user/img/lai-suat-uu-dai-tpbank.png" alt="" width="42" height="42">
                                  <h5 class="typography__H5-xnobu1-4 fTgQac primary-color mt-3">ƯU ĐÃI LÃI SUẤT</h5>
                                  <span class="typography__Body-xnobu1-8 ieEwWJ">Khi bạn được <strong>TPBank</strong> sơ duyệt, <strong>TPBank</strong> sẽ chọn khoản vay có tỉ lệ giải ngân cao nhất từ tối thiểu 3 ngân hàng. Tỷ lệ giải ngân thành công lên tới <strong>90%</strong>. Lãi suất chỉ từ <strong>1.1%/tháng</strong>.</span>
                                </div>
                            </div>
                            <div>
                              <div class="d-flex flex-column align-items-center text-center px-3" tabindex="-1" style="width: 100%; display: inline-block;">
                                <img src="/user/img/don-gian-nhanh-gon.png" alt="" width="42" height="42">
                                <h5 class="typography__H5-xnobu1-4 fTgQac primary-color mt-3">ĐƠN GIẢN, NHANH CHÓNG.</h5>
                                <span class="typography__Body-xnobu1-8 ieEwWJ"><strong>TPBank</strong> Tối giản các thủ tục cần chuẩn bị. Tiến hành thẩm định nhanh để kiệm tiến độ của khách hàng.</span>
                              </div>
                          </div>
                          <div>
                              <div class="d-flex flex-column align-items-center text-center px-3" tabindex="-1" style="width: 100%; display: inline-block;">
                                <img src="/user/img/z2353647741450_a4a89b3e159a1f8123472cf70518d4cb.png" alt="" width="42" height="42">
                                <h5 class="typography__H5-xnobu1-4 fTgQac primary-color mt-3">BẢO MẬT THÔNG TIN KHOẢN VAY</h5>
                                <span class="typography__Body-xnobu1-8 ieEwWJ">
                                  Việc bảo mật thông tin khi vay vốn tín chấp đối với gia đình và người thân là có thể. Khi bạn dùng nguồn vốn vay tín chấp này vào đúng việc, đúng mục đích, giải quyết được khó khăn.</span>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="my-4 text-center" style="color: rgb(108, 108, 108);">
                        <div style="text-align: center; font-weight: 700; font-size: 12px; line-height: 18px; color: rgb(108, 108, 108);">Đối tác tiêu biểu của TPBank</div>
                        <div class="px-4 mb-3"><img src="/user/img/partnerLogos-image.png" alt="" class="img-fluid"></div>
                        <div><span class="typography__Caption-xnobu1-9 jIpvmC">Trụ sở: Tầng 4, 110 Nguyễn Khánh Toàn, P.Quan Hoa,Q.Cầu Giấy, Tp.Hà Nội</span></div>
                        <div class="mx-auto mt-3 d-flex w-100 justify-content-center">
                            <div class="mr-3" aria-hidden="true" style="cursor: pointer;"><img src="" alt=""><span class="typography__Body-xnobu1-8 ieEwWJ" style="font-weight: 700; color: rgb(45, 45, 45); margin-left: 5px; vertical-align: middle;">Giới thiệu</span></div>
                            <div class="mr-3" aria-hidden="true" style="cursor: pointer;"><img src="" alt=""><span class="typography__Body-xnobu1-8 ieEwWJ" style="font-weight: 700; color: rgb(45, 45, 45); margin-left: 5px; vertical-align: middle;">Hỏi đáp</span></div>
                            <div class="mr-3" aria-hidden="true" style="cursor: pointer;"><a href="tel:0338060505" target="_top" class="indexPage__StyledA-jyyslb-4 fMSHpZ"><img src="" alt=""><span class="typography__Body-xnobu1-8 ieEwWJ" style="font-weight: 700; color: rgb(45, 45, 45); margin-left: 5px; vertical-align: middle;">Hỗ trợ</span></a></div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
      <div id="gatsby-announcer" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 0px; width: 1px; height: 1px; padding: 0px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border: 0px;"></div>
      <div class="Toastify"></div>
    </div>
    <hr>
    @include('user.modal.create')
    @include('user/layouts/javascript')
    <script>
        $('.slick-carousel').slick({
          infinite: true,
          slidesToShow: 1, // Shows a three slides at a time
          arrows: true, // Adds arrows to sides of slider
          dots: true, // Adds the dots on the bottom
          autoplay: true,
          autoplaySpeed: 2000,
        });
        $('.submit-register').click(function(e){
              e.preventDefault();
            $('#createTempSample').modal('show');
        })
   </script>
@endsection


