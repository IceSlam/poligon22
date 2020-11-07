<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poligon22
 */

?>

  </main>

    <footer class="is-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 brand">
            <a href="./" class="">
            <img src="<?php echo get_template_directory_uri() . "/assets/img/poligon_logo.png" ?>" alt="Полигон22" class="img-fluid is-brand__logo">
            <div class="is-brand">
              <h1 class="is-brand__title">
                Полигон 22
              </h1>
              <p class="is-brand__description">
                Лазертаг от команды профессионалов!
              </p>
            </div>
          </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <p class="is-footer__games-counter">
              11 лет организуем
            </p>
            <p class="is-footer__games-type">
              игры в лазертаг
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="is-footer__phone">
              <a href="tel:+7 (3852) 39-52-90" class="tel">
                +7 (3852) 39-52-90
              </a>
              <br>
              <a href="mailto:poligon22@list.ru" class="email">
                Эл. почта: poligon22@list.ru
              </a>
              <br>
              <p class="city">
                г. Барнаул
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="is-footer__socials mt-3">
              <a href="https://vk.com" class="social vk">
                <i class="fab fa-vk"></i>
              </a>
              <a href="https://youtube.com" class="social yt">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="https://ok.ru" class="social ok">
                <i class="fab fa-odnoklassniki"></i>
              </a>
              <a href="https://instagram.com" class="social inst">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
            <a href="https://alianscompany.ru" class="btn alians mt-2 btn-block text-right">
              Разработка сайта Альянс+
              <svg class="alians-logo" width="52" height="30" viewBox="0 0 52 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
              <path class="fill fill-1" fill-rule="evenodd" clip-rule="evenodd" d="M2.48047 16.3866L25.952 0L35.3979 6.64916C24.6163 4.53782 13.5484 9.20168 2.48047 16.3866Z" fill="#2B5D84"/>
              <path class="fill fill-2" fill-rule="evenodd" clip-rule="evenodd" d="M49.1685 16.3549L37.3692 8.03558C31.7716 6.64903 26.4285 7.53138 20.8945 8.31919C32.5667 9.04398 41.8536 11.5965 49.1685 16.3549Z" fill="#D76654"/>
              <path class="fill fill-3" fill-rule="evenodd" clip-rule="evenodd" d="M40.3601 12.0063C43.5724 13.1722 46.4984 14.6218 49.1699 16.355C45.099 13.7079 41.6005 11.313 37.4024 9.39072C31.2959 8.19324 25.5712 8.06719 20.9277 8.31929C27.6066 8.72895 34.1583 9.70584 40.3601 12.0063Z" fill="#D35443"/>
              <path class="fill fill-4" fill-rule="evenodd" clip-rule="evenodd" d="M38.4839 12.9831C31.8686 10.6511 25.6031 9.86331 19.1151 9.39062C15.2349 10.7142 12.0227 12.3843 8.14258 14.6847C17.9065 11.5965 28.0203 10.8717 38.4839 12.9831Z" fill="#7FBBEB"/>
              <path class="fill fill-5" fill-rule="evenodd" clip-rule="evenodd" d="M9.95487 14.1176C15.8387 12.4475 21.8179 11.6597 27.9243 11.7857C31.4546 11.8487 34.9848 12.2584 38.4515 12.9517C32.5041 11.5336 26.5249 10.6197 20.3549 10.8718C15.2662 11.7857 11.5769 13.1723 8.17383 14.6218C8.77811 14.4643 9.35059 14.3067 9.95487 14.1176Z" fill="#6290CC"/>
              <path class="fill fill-6" fill-rule="evenodd" clip-rule="evenodd" d="M2.48047 16.3866L25.952 0L35.3979 6.64916C24.6163 4.53782 13.5484 9.20168 2.48047 16.3866Z" fill="#5682B8"/>
              <path class="fill fill-7" fill-rule="evenodd" clip-rule="evenodd" d="M2.57617 16.3237L2.89421 16.1031C9.95476 11.5023 17.1107 7.05898 25.1572 3.90771C28.6875 4.50645 32.0269 5.45183 35.3028 6.64931C24.5529 4.60099 13.5805 9.20183 2.57617 16.3237Z" fill="#2B5D84"/>
              <path class="fill fill-8" fill-rule="evenodd" clip-rule="evenodd" d="M25.9519 0L25.125 3.90756C28.4644 4.41177 31.8993 5.45168 35.3978 6.68067L25.9519 0Z" fill="#5D8FC8"/>
              <path class="fill fill-9" fill-rule="evenodd" clip-rule="evenodd" d="M37.4342 9.42209L37.4024 8.06705C32.6317 6.83806 26.4935 7.24772 20.9277 8.35066C26.0482 8.22461 32.7589 8.4452 37.4342 9.42209Z" fill="#D9715F"/>
              <path class="fill fill-10" fill-rule="evenodd" clip-rule="evenodd" d="M7.95117 14.7793C11.2588 12.731 14.9163 10.9032 19.1145 9.39062L20.3866 10.9032C16.2521 11.5965 11.9585 12.9831 7.95117 14.7793Z" fill="#73ACE1"/>
              <path class="fill fill-11" d="M3.53028 17.458C3.49847 17.458 3.49847 17.458 3.46667 17.4895C3.46667 17.521 3.43486 17.521 3.40306 17.5841C3.37125 17.6471 3.33945 17.7101 3.30765 17.8046L1.17676 23.6975C1.11315 23.8551 1.04954 24.0126 0.985933 24.1072C0.922324 24.2332 0.826911 24.3278 0.731498 24.4223C0.636086 24.5168 0.508869 24.5483 0.349847 24.5799C0.318043 24.5799 0.254434 24.5799 0.22263 24.5799C0.159021 24.5799 0.127217 24.5799 0.0954129 24.5799C0.0636086 24.5799 0.0636086 24.5799 0.0318043 24.5799C0 24.6114 0 24.6429 0 24.6429C0 24.6744 0 24.6744 0.0318043 24.7059C0.0636086 24.7374 0.0954128 24.7374 0.159021 24.7374C0.286239 24.7374 0.381651 24.7374 0.508869 24.7374C0.636086 24.7374 0.731498 24.7374 0.826911 24.7374C0.922324 24.7374 1.01774 24.7374 1.08135 24.7374C1.14495 24.7374 1.20856 24.7374 1.24037 24.7374C1.27217 24.7374 1.30398 24.7374 1.36758 24.7374C1.43119 24.7374 1.4948 24.7374 1.55841 24.7374C1.62202 24.7374 1.71743 24.7374 1.78104 24.7374C1.84465 24.7374 1.90826 24.7374 1.97187 24.7374C2.00367 24.7374 2.03547 24.7374 2.06728 24.7059C2.09908 24.7059 2.09908 24.6744 2.09908 24.6429C2.09908 24.6114 2.09908 24.6114 2.06728 24.6114C2.03547 24.6114 2.03547 24.6114 2.00367 24.6114H1.94006C1.87645 24.6114 1.81284 24.6114 1.78104 24.5799C1.71743 24.5483 1.68563 24.5483 1.65382 24.4853C1.62202 24.4538 1.59021 24.3908 1.59021 24.3278C1.59021 24.2332 1.59021 24.1387 1.62202 24.0441C1.65382 23.9496 1.68563 23.8236 1.71743 23.6975L2.28991 22.0273C2.28991 21.9958 2.32171 21.9958 2.32171 21.9643C2.32171 21.9328 2.35352 21.9328 2.38532 21.9328H4.4526C4.4844 21.9328 4.4844 21.9328 4.51621 21.9328L4.54801 21.9643L5.43853 24.2962C5.43853 24.3278 5.47034 24.3278 5.47034 24.3593C5.47034 24.3908 5.47034 24.3908 5.47034 24.4223C5.47034 24.4538 5.47034 24.4853 5.43853 24.5168C5.37492 24.5799 5.37492 24.5799 5.37492 24.5799C5.34312 24.5799 5.34312 24.5799 5.34312 24.6114L5.31132 24.6429C5.31132 24.6744 5.34312 24.6744 5.37492 24.6744C5.40673 24.6744 5.50214 24.7059 5.59755 24.7059C5.75658 24.7059 5.9156 24.7059 6.10642 24.7059C6.26544 24.7059 6.42447 24.7059 6.55168 24.7059C6.6789 24.7059 6.80612 24.7059 6.90153 24.7059C6.99694 24.7059 7.06055 24.7059 7.09235 24.7059C7.15596 24.7059 7.18777 24.7059 7.21957 24.6744C7.25138 24.6744 7.28318 24.6429 7.28318 24.6114C7.28318 24.5799 7.28318 24.5799 7.25138 24.5799C7.25138 24.5799 7.21957 24.5799 7.18777 24.5799C7.15596 24.5799 7.09235 24.5799 7.02875 24.5799C6.96514 24.5799 6.90153 24.5483 6.80612 24.5483C6.77431 24.5483 6.7107 24.5168 6.64709 24.4853C6.58349 24.4538 6.51988 24.3908 6.45627 24.3278C6.39266 24.2647 6.32905 24.1387 6.23364 24.0126C6.13823 23.8866 6.07462 23.6975 5.9792 23.5084C5.9156 23.3194 5.82018 23.0988 5.72477 22.8782C5.62936 22.6576 5.53395 22.374 5.40673 22.0904C5.27951 21.8067 5.1841 21.4916 5.05688 21.208C4.92966 20.8929 4.83425 20.6093 4.70703 20.2941C4.57982 19.979 4.4844 19.6954 4.38899 19.4118C4.29358 19.1282 4.19816 18.9076 4.10275 18.687C4.00734 18.4664 3.94373 18.2773 3.88012 18.1198C3.81651 17.9937 3.78471 17.8992 3.75291 17.8362C3.7211 17.7416 3.6893 17.6786 3.65749 17.6156C3.62569 17.5841 3.62569 17.521 3.59388 17.521C3.56208 17.458 3.56208 17.458 3.53028 17.458ZM2.51254 21.6177C2.48073 21.6177 2.48073 21.5862 2.51254 21.6177C2.48073 21.5862 2.48073 21.5862 2.48073 21.5546L3.30765 19.0021C3.30765 18.9706 3.33945 18.9391 3.33945 18.9391C3.33945 18.9076 3.37125 18.9076 3.37125 18.9076C3.40306 18.9076 3.40306 18.9076 3.40306 18.9391C3.40306 18.9706 3.43486 18.9706 3.43486 19.0336L4.32538 21.5862C4.32538 21.6177 4.32538 21.6177 4.32538 21.6177C4.32538 21.6177 4.32538 21.6492 4.29358 21.6492H2.51254V21.6177ZM9.47768 21.5231L10.3046 18.9706C10.3364 18.8446 10.4 18.8446 10.4318 18.9706L11.3223 21.5231L11.4813 21.9958L12.3719 24.3278C12.4037 24.3908 12.4037 24.4538 12.4037 24.5168C12.4037 24.5483 12.3719 24.5799 12.3401 24.5799C12.3083 24.5799 12.3083 24.5799 12.3083 24.6114C12.3083 24.6429 12.2765 24.6429 12.2765 24.6429C12.2765 24.6744 12.3083 24.6744 12.3401 24.6744C12.3719 24.6744 12.4673 24.7059 12.5627 24.7059C12.7217 24.7059 12.8807 24.7059 13.0716 24.7059C13.2306 24.7059 13.3896 24.7059 13.5168 24.7059C13.644 24.7059 13.7713 24.7059 13.8667 24.7059C13.9621 24.7059 14.0257 24.7059 14.0575 24.7059C14.1211 24.7059 14.1529 24.7059 14.1847 24.6744C14.2165 24.6744 14.2483 24.6429 14.2483 24.6114C14.2483 24.5799 14.2483 24.5799 14.2165 24.5799C14.2165 24.5799 14.1847 24.5799 14.1529 24.5799C14.1211 24.5799 14.0575 24.5799 13.9939 24.5799C13.9303 24.5799 13.8667 24.5483 13.7713 24.5483C13.7394 24.5483 13.6758 24.5168 13.6122 24.4853C13.5486 24.4538 13.485 24.3908 13.4214 24.3278C13.3578 24.2647 13.2942 24.1387 13.1988 24.0126C13.1034 23.8866 13.0398 23.6975 12.9443 23.5084C12.8807 23.3194 12.7853 23.0988 12.6899 22.8782C12.5945 22.6576 12.4991 22.374 12.3719 22.0904C12.2446 21.8067 12.1492 21.4916 12.022 21.208C11.8948 20.8929 11.7994 20.6093 11.6722 20.2941C11.545 19.979 11.4495 19.6954 11.3541 19.4118C11.2587 19.1282 11.1633 18.9076 11.0679 18.687C10.9725 18.4664 10.9089 18.2773 10.8453 18.1198C10.7817 17.9937 10.7498 17.8992 10.718 17.8362C10.6862 17.7416 10.6544 17.6786 10.6226 17.6156C10.5908 17.5841 10.5908 17.521 10.559 17.521C10.5272 17.521 10.5272 17.4895 10.4954 17.4895C10.4636 17.4895 10.4636 17.4895 10.4318 17.521C10.4318 17.5525 10.4 17.5525 10.3682 17.6156C10.3364 17.6786 10.3046 17.7416 10.2728 17.8362L8.11009 23.6975C8.04648 23.8551 7.98287 24.0126 7.91927 24.1072C7.85566 24.2332 7.76024 24.3278 7.66483 24.4223C7.56942 24.4853 7.4422 24.5483 7.31498 24.5799C7.28318 24.5799 7.21957 24.5799 7.18777 24.5799C7.12416 24.5799 7.09235 24.5799 7.06055 24.5799C7.02875 24.5799 7.02875 24.5799 6.99694 24.5799C6.96514 24.5799 6.96514 24.6114 6.96514 24.6114C6.96514 24.6429 6.96514 24.6429 6.99694 24.6744C7.02875 24.7059 7.06055 24.7059 7.12416 24.7059C7.25138 24.7059 7.34679 24.7059 7.47401 24.7059C7.60122 24.7059 7.69664 24.7059 7.79205 24.7059C7.88746 24.7059 7.98287 24.7059 8.04648 24.7059C8.11009 24.7059 8.1737 24.7059 8.2055 24.7059C8.23731 24.7059 8.26911 24.7059 8.33272 24.7059C8.39633 24.7059 8.45994 24.7059 8.52355 24.7059C8.58716 24.7059 8.68257 24.7059 8.74618 24.7059C8.80979 24.7059 8.87339 24.7059 8.937 24.7059C8.96881 24.7059 9.00061 24.7059 9.03242 24.6744C9.06422 24.6744 9.06422 24.6429 9.06422 24.6114C9.06422 24.5799 9.06422 24.5799 9.03242 24.5799C9.00061 24.5799 9.00061 24.5799 8.96881 24.5799H8.87339C8.80979 24.5799 8.74618 24.5799 8.71437 24.5483C8.65076 24.5168 8.61896 24.5168 8.58716 24.4538C8.55535 24.4223 8.52355 24.3593 8.52355 24.2962C8.52355 24.2017 8.52355 24.1072 8.55535 24.0126C8.58716 23.9181 8.61896 23.792 8.65076 23.666L9.47768 21.5231ZM15.9339 20.3257V21.9958C15.9339 22.311 15.9339 22.5946 15.9339 22.8467C15.9339 23.0988 15.9339 23.3509 15.9339 23.5399C15.9339 23.7605 15.9021 23.9181 15.9021 24.0441C15.9021 24.1387 15.8703 24.2017 15.8703 24.2962C15.8703 24.3908 15.8385 24.4223 15.8067 24.4853C15.7749 24.5168 15.7113 24.5799 15.6477 24.5799C15.5841 24.5799 15.5205 24.5799 15.4887 24.5799C15.4569 24.5799 15.3933 24.5799 15.3615 24.5799C15.3297 24.5799 15.3297 24.5799 15.2979 24.6114C15.2661 24.6429 15.2661 24.6429 15.2661 24.6429C15.2661 24.6744 15.2661 24.6744 15.2979 24.7059C15.3297 24.7374 15.3615 24.7374 15.4251 24.7374C15.4887 24.7374 15.5841 24.7374 15.6795 24.7374C15.7749 24.7374 15.8703 24.7374 15.9657 24.7374C16.0612 24.7374 16.1566 24.7374 16.2202 24.7374C16.2838 24.7374 16.3474 24.7374 16.3474 24.7374C16.3792 24.7374 16.411 24.7374 16.4746 24.7374C16.5382 24.7374 16.6336 24.7374 16.7609 24.7374C16.8563 24.7374 16.9835 24.7374 17.0789 24.7689C17.1743 24.8004 17.3015 24.7689 17.3969 24.7689C17.4924 24.7689 17.556 24.7689 17.6196 24.7689C17.9376 24.7689 18.2239 24.7374 18.5101 24.6429C18.7645 24.5483 18.9872 24.4538 19.2098 24.3278C19.4006 24.2017 19.5596 24.0441 19.6869 23.8551C19.8141 23.666 19.9095 23.5084 19.9731 23.2878C20.0367 23.0673 20.0367 22.9097 20.0367 22.6891C20.0367 22.4055 20.0049 22.1534 19.9095 21.9328C19.8141 21.7122 19.7187 21.5231 19.5596 21.3971C19.4006 21.2395 19.2416 21.1135 19.0508 21.0189C18.8599 20.9244 18.6691 20.8614 18.4783 20.7983C18.2875 20.7353 18.0648 20.7038 17.874 20.6723C17.6832 20.6408 17.4924 20.6408 17.3333 20.6408C17.1743 20.6408 17.0153 20.6408 16.9199 20.6093C16.8245 20.5778 16.7609 20.6093 16.7291 20.5778C16.6972 20.5778 16.6972 20.5462 16.6972 20.5462C16.6972 20.5462 16.6654 20.5147 16.6654 20.4832V18.2458C16.6654 18.0883 16.6972 17.9622 16.7609 17.8677C16.8245 17.7731 16.8881 17.7416 17.0153 17.7101C17.0789 17.7101 17.1107 17.6786 17.1425 17.6786C17.1743 17.6786 17.2061 17.6786 17.2379 17.6786C17.2697 17.6786 17.2697 17.6786 17.3015 17.6471L17.3333 17.6156C17.3333 17.5841 17.3333 17.5841 17.3015 17.5525C17.2697 17.521 17.2379 17.521 17.1743 17.521C17.1107 17.521 17.0153 17.521 16.9199 17.521C16.8245 17.521 16.7291 17.521 16.6336 17.521C16.5382 17.521 16.4428 17.521 16.3792 17.521C16.3156 17.521 16.2838 17.521 16.252 17.521C16.252 17.521 16.1884 17.521 16.1248 17.521C16.0612 17.521 15.9657 17.521 15.8703 17.521C15.7749 17.521 15.6795 17.521 15.5523 17.521C15.4569 17.521 15.3615 17.521 15.2661 17.521C15.2343 17.521 15.1706 17.521 15.1388 17.5525C15.107 17.5525 15.107 17.5841 15.107 17.6156C15.107 17.6471 15.107 17.6471 15.1388 17.6471L15.1706 17.6786C15.2024 17.6786 15.2343 17.6786 15.2979 17.6786C15.3615 17.6786 15.3933 17.6786 15.4569 17.7101C15.5523 17.7416 15.6477 17.7731 15.7113 17.8677C15.7749 17.9622 15.8067 18.0883 15.8385 18.2458L15.9339 20.3257ZM16.6972 21.082C16.6972 21.0504 16.6972 21.0189 16.7291 20.9874C16.7609 20.9559 16.7927 20.9559 16.8245 20.9559C16.9517 20.9559 17.1107 20.9559 17.2379 20.9559C17.3651 20.9559 17.4606 20.9559 17.5878 20.9559C17.715 20.9559 17.8104 20.9874 17.9376 21.0189C18.0648 21.0504 18.1602 21.1135 18.3193 21.208C18.5101 21.3341 18.6373 21.4601 18.7645 21.6177C18.8917 21.7752 18.9872 21.9328 19.0508 22.1219C19.1144 22.3109 19.178 22.4685 19.2098 22.6261C19.2416 22.7836 19.2416 22.9412 19.2416 23.0988C19.2416 23.3194 19.2098 23.5084 19.1462 23.6345C19.0826 23.792 19.019 23.9181 18.9235 24.0126C18.8281 24.1072 18.7009 24.2017 18.6055 24.2332C18.4783 24.2962 18.3829 24.3278 18.2557 24.3593C18.1284 24.3908 18.033 24.3908 17.9376 24.3908C17.874 24.3908 17.8104 24.3908 17.715 24.3908C17.6196 24.3908 17.5242 24.3593 17.3969 24.3593C17.3015 24.3278 17.1743 24.2962 17.1107 24.2647C17.0153 24.2332 16.9517 24.1702 16.8881 24.1072C16.8563 24.0441 16.8245 23.9811 16.7927 23.8866C16.7927 23.792 16.7609 23.666 16.7609 23.5084C16.7609 23.4769 16.7609 23.4139 16.7609 23.3194C16.7609 23.2248 16.7609 23.0988 16.7609 22.9412C16.7609 22.7836 16.7609 22.6261 16.7609 22.4685C16.7609 22.311 16.7609 22.1219 16.7609 21.9643C16.7609 21.8067 16.7609 21.6492 16.7609 21.4916V21.082H16.6972ZM26.2385 21.6807C26.2703 21.6807 26.2703 21.6807 26.2703 21.7122C26.3021 21.7122 26.3021 21.7437 26.3021 21.7752V21.9958C26.3021 22.311 26.3021 22.5946 26.3021 22.8467C26.3021 23.0988 26.3021 23.3509 26.3021 23.5399C26.3021 23.7605 26.2703 23.9181 26.2703 24.0441C26.2703 24.1387 26.2385 24.2017 26.2385 24.2962C26.2067 24.3593 26.1749 24.4223 26.1431 24.4853C26.1113 24.5483 26.0159 24.5799 25.9205 24.5799C25.8887 24.5799 25.8251 24.5799 25.7615 24.6114C25.6979 24.6114 25.6661 24.6114 25.6024 24.6114C25.5388 24.6114 25.507 24.6114 25.4752 24.6114C25.4434 24.6114 25.4434 24.6114 25.4116 24.6429C25.3798 24.6744 25.3798 24.6744 25.3798 24.6744C25.3798 24.6744 25.3798 24.7059 25.4116 24.7374C25.4434 24.7374 25.4752 24.7689 25.5388 24.7689C25.6661 24.7689 25.7933 24.7689 25.9523 24.7689C26.0795 24.7689 26.2067 24.7689 26.3021 24.7689C26.4294 24.7689 26.5248 24.7689 26.5884 24.7689C26.652 24.7689 26.7156 24.7689 26.7156 24.7689C26.7156 24.7689 26.7474 24.7689 26.811 24.7689C26.8746 24.7689 26.9382 24.7689 27.0336 24.7689C27.1291 24.7689 27.2245 24.7689 27.3199 24.7689C27.4153 24.7689 27.5107 24.7689 27.5743 24.7689C27.6379 24.7689 27.6697 24.7689 27.7015 24.7374C27.7333 24.7374 27.7333 24.7059 27.7333 24.6744C27.7333 24.6429 27.7333 24.6429 27.7015 24.6429C27.7015 24.6429 27.6697 24.6114 27.6379 24.6114C27.6061 24.6114 27.5425 24.6114 27.5107 24.6114C27.4789 24.6114 27.4153 24.5799 27.3835 24.5799C27.3199 24.5799 27.2563 24.5483 27.2563 24.4853C27.2245 24.4538 27.1927 24.3908 27.1609 24.2962C27.1291 24.2017 27.1291 24.1387 27.1291 24.0441C27.0972 23.9181 27.0972 23.729 27.0972 23.5399C27.0972 23.3509 27.0654 23.0988 27.0654 22.8467C27.0654 22.5946 27.0654 22.311 27.0654 21.9958V20.3257C27.0654 20.042 27.0654 19.7899 27.0654 19.5694C27.0654 19.3488 27.0654 19.1912 27.0654 19.0652C27.0654 18.9391 27.0654 18.8131 27.0654 18.7185C27.0654 18.624 27.0654 18.5609 27.0654 18.4979C27.0654 18.4349 27.0654 18.3719 27.0654 18.3088C27.0654 18.2143 27.0972 18.1198 27.0972 18.0567C27.1291 17.9937 27.1609 17.9307 27.2245 17.8677C27.2881 17.8362 27.3517 17.8046 27.4471 17.7731C27.4789 17.7731 27.5107 17.7731 27.5425 17.7416C27.5743 17.7416 27.6379 17.7416 27.6697 17.7416C27.7015 17.7416 27.7333 17.7416 27.7651 17.7416C27.7969 17.7416 27.7969 17.7416 27.8287 17.7101L27.8605 17.6786C27.8605 17.6471 27.8605 17.6471 27.8287 17.6156C27.7969 17.5841 27.7651 17.5841 27.7015 17.5841C27.6061 17.5841 27.4789 17.5841 27.3517 17.5841C27.2245 17.5841 27.1291 17.5841 27.0336 17.5841C26.9064 17.5841 26.8428 17.5841 26.7792 17.5841C26.7156 17.5841 26.652 17.5841 26.652 17.5841C26.652 17.5841 26.5884 17.5841 26.5248 17.5841C26.4612 17.5841 26.3657 17.5841 26.2703 17.5525C26.1749 17.5525 26.0477 17.521 25.9523 17.521C25.8569 17.521 25.7297 17.4895 25.6343 17.4895C25.5388 17.4895 25.4752 17.4895 25.4116 17.4895C25.189 17.4895 24.9664 17.521 24.7119 17.5525C24.4893 17.5841 24.2667 17.6786 24.044 17.7731C23.8214 17.8677 23.6624 17.9937 23.4716 18.1513C23.3125 18.3088 23.1853 18.4979 23.0899 18.75C22.9945 19.0021 22.9627 19.2542 22.9627 19.5378C22.9627 19.6954 22.9945 19.8845 23.0581 20.0736C23.1217 20.2626 23.2171 20.4202 23.3443 20.5778C23.4716 20.7353 23.5988 20.8929 23.7896 21.0189C23.9804 21.145 24.1395 21.271 24.3621 21.3341C24.1713 21.6492 24.0122 21.9643 23.8214 22.2794C23.6306 22.5631 23.4716 22.8467 23.2807 23.0988C23.0899 23.3509 22.9309 23.603 22.7719 23.792C22.6128 23.9811 22.4538 24.1072 22.2948 24.2017C22.1358 24.2962 22.0404 24.3593 21.9132 24.4223C21.7859 24.4538 21.6905 24.4853 21.6269 24.4853C21.5315 24.4853 21.4679 24.5168 21.4361 24.5168C21.4043 24.5168 21.3725 24.5168 21.3407 24.5168C21.3089 24.5168 21.3089 24.5168 21.2771 24.5483C21.2453 24.5483 21.2453 24.5799 21.2453 24.5799C21.2453 24.6114 21.2771 24.6114 21.2771 24.6429C21.3089 24.6744 21.3725 24.6744 21.4679 24.6744H22.0722C22.263 24.6744 22.3902 24.6744 22.5174 24.6744C22.6446 24.6429 22.7401 24.6429 22.8355 24.6114C22.9309 24.5799 23.0263 24.5483 23.0899 24.5168C23.2171 24.4223 23.3443 24.2962 23.5034 24.1702C23.6624 24.0441 23.7578 23.8551 23.9168 23.666C24.044 23.4769 24.2031 23.2563 24.3621 23.0042L25.189 21.6807H26.2385ZM26.3021 18.1198V21.082C26.2703 21.1765 26.2067 21.2395 26.1749 21.271C26.1431 21.3025 26.0795 21.3341 25.9841 21.3656C25.9205 21.3656 25.7933 21.3656 25.6661 21.3656C25.4116 21.3656 25.1572 21.3025 24.9346 21.208C24.7119 21.1135 24.5211 20.9874 24.3303 20.7983C24.1713 20.6093 24.0122 20.3887 23.9168 20.1681C23.8214 19.916 23.7896 19.6324 23.7896 19.3488C23.7896 19.0967 23.8214 18.8761 23.885 18.7185C23.9486 18.5609 24.0122 18.4034 24.1395 18.3088C24.2349 18.2143 24.3621 18.1198 24.4575 18.0567C24.5529 17.9937 24.7119 17.9622 24.8391 17.9307C24.9664 17.8992 25.0618 17.8992 25.1572 17.8992C25.2208 17.8992 25.3162 17.8992 25.4116 17.9307C25.507 17.9622 25.6343 17.9622 25.7297 17.9622C25.8251 17.9937 25.9205 17.9937 26.0159 17.9937C26.1113 18.0252 26.1431 18.0252 26.1749 18.0252C26.2067 18.0252 26.2067 18.0567 26.2385 18.0567C26.2703 18.0567 26.3021 18.0883 26.3021 18.1198ZM36.4159 20.3257C36.4159 20.042 36.4159 19.7899 36.4159 19.5694C36.4159 19.3488 36.4159 19.1912 36.4159 19.0652C36.4159 18.9391 36.4159 18.8131 36.4159 18.7185C36.4159 18.624 36.4159 18.5609 36.4159 18.4979C36.4159 18.4349 36.4159 18.3719 36.4159 18.3088C36.4159 18.1513 36.4477 18.0252 36.5113 17.9307C36.5749 17.8362 36.6385 17.8046 36.7657 17.7731C36.8294 17.7731 36.8612 17.7416 36.893 17.7416C36.9248 17.7416 36.9566 17.7416 36.9884 17.7416C37.0202 17.7416 37.0202 17.7416 37.052 17.7101L37.0838 17.6786C37.0838 17.6471 37.0838 17.6471 37.052 17.6156C37.0202 17.5841 36.9884 17.5841 36.9248 17.5841C36.8612 17.5841 36.7658 17.5841 36.6703 17.5841C36.5749 17.5841 36.4795 17.5841 36.3841 17.5841C36.2887 17.5841 36.1933 17.5841 36.1297 17.5841C36.0661 17.5841 36.0342 17.5841 36.0024 17.5841C36.0024 17.5841 35.9388 17.5841 35.8752 17.5841C35.8116 17.5841 35.7162 17.5841 35.6208 17.5841C35.4936 17.5841 35.3982 17.5841 35.271 17.5841C35.1437 17.5841 35.0483 17.5841 34.9211 17.5841C34.8893 17.5841 34.8257 17.5841 34.7939 17.6156C34.7621 17.6156 34.7621 17.6471 34.7621 17.6786C34.7621 17.7101 34.7621 17.7101 34.7939 17.7101L34.8257 17.7416C34.8575 17.7416 34.8893 17.7416 34.9211 17.7416C34.9529 17.7416 35.0165 17.7416 35.0483 17.7416C35.0801 17.7416 35.1119 17.7416 35.1437 17.7731C35.2391 17.8046 35.3346 17.8362 35.3664 17.8677C35.43 17.8992 35.4618 17.9622 35.4936 18.0567C35.5254 18.1198 35.5254 18.2143 35.5254 18.3088C35.5254 18.3719 35.5254 18.4349 35.5254 18.4979C35.5254 18.5609 35.5254 18.6555 35.5254 18.75C35.5254 18.8446 35.5254 18.9706 35.5254 19.1282C35.5254 19.2857 35.5254 19.4433 35.5254 19.6639C35.5254 19.8845 35.5254 20.1366 35.5254 20.4202V20.6093C35.5254 20.6408 35.5254 20.6408 35.4936 20.6408C35.4618 20.6408 35.4618 20.6408 35.4618 20.6408H31.518H31.4862L31.4544 20.6093V20.4202C31.4544 20.1366 31.4544 19.8845 31.4544 19.6639C31.4544 19.4433 31.4544 19.2857 31.4544 19.1282C31.4544 18.9706 31.4544 18.8446 31.4544 18.75C31.4544 18.6555 31.4544 18.5609 31.4544 18.4979C31.4544 18.4349 31.4544 18.3719 31.4544 18.3088C31.4544 18.1513 31.4862 18.0252 31.5498 17.9307C31.6135 17.8362 31.6771 17.8046 31.8043 17.7731C31.8679 17.7731 31.8997 17.7416 31.9315 17.7416C31.9633 17.7416 31.9951 17.7416 32.0269 17.7416C32.0587 17.7416 32.0587 17.7416 32.0905 17.7101L32.1223 17.6786C32.1223 17.6471 32.1223 17.6471 32.0905 17.6156C32.0587 17.5841 32.0269 17.5841 31.9633 17.5841C31.8997 17.5841 31.8043 17.5841 31.7089 17.5841C31.6135 17.5841 31.518 17.5841 31.4226 17.5841C31.3272 17.5841 31.2318 17.5841 31.1682 17.5841C31.1046 17.5841 31.0728 17.5841 31.041 17.5841C31.041 17.5841 30.9774 17.5841 30.9138 17.5841C30.8502 17.5841 30.7547 17.5841 30.6593 17.5841C30.5321 17.5841 30.4367 17.5841 30.3095 17.5841C30.1823 17.5841 30.0868 17.5841 29.9596 17.5841C29.9278 17.5841 29.8642 17.5841 29.8324 17.6156C29.8006 17.6156 29.8006 17.6471 29.8006 17.6786C29.8006 17.7101 29.8006 17.7101 29.8324 17.7101L29.8642 17.7416C29.896 17.7416 29.9278 17.7416 29.9596 17.7416C29.9914 17.7416 30.055 17.7416 30.0868 17.7416C30.1187 17.7416 30.1505 17.7416 30.1823 17.7731C30.2777 17.8046 30.3731 17.8362 30.4049 17.8677C30.4685 17.8992 30.5003 17.9622 30.5321 18.0567C30.5639 18.1198 30.5639 18.2143 30.5639 18.3088C30.5639 18.3719 30.5639 18.4349 30.5639 18.4979C30.5639 18.5609 30.5639 18.624 30.5639 18.7185C30.5639 18.8131 30.5639 18.9391 30.5639 19.0652C30.5639 19.1912 30.5639 19.3803 30.5639 19.5694C30.5639 19.7584 30.5639 20.0105 30.5639 20.3257V21.9958C30.5639 22.311 30.5639 22.5946 30.5639 22.8467C30.5639 23.0988 30.5639 23.3509 30.5639 23.5399C30.5639 23.7605 30.5321 23.9181 30.5321 24.0441C30.5321 24.1387 30.5003 24.2017 30.5003 24.2962C30.5003 24.3908 30.4685 24.4223 30.4367 24.4853C30.4049 24.5168 30.3413 24.5799 30.2777 24.5799C30.2459 24.5799 30.1823 24.6114 30.1505 24.6114C30.1187 24.6114 30.055 24.6114 30.0232 24.6114C29.9914 24.6114 29.9914 24.6114 29.9596 24.6429C29.9278 24.6744 29.9278 24.6744 29.9278 24.6744C29.9278 24.7059 29.9278 24.7059 29.9596 24.7374C29.9914 24.7689 30.0232 24.7689 30.0868 24.7689C30.1505 24.7689 30.2459 24.7689 30.3413 24.7689C30.4367 24.7689 30.5321 24.7689 30.6275 24.7689C30.7229 24.7689 30.8183 24.7689 30.882 24.7689C30.9456 24.7689 31.0092 24.7689 31.0092 24.7689C31.041 24.7689 31.0728 24.7689 31.1364 24.7689C31.2 24.7689 31.2954 24.7689 31.4226 24.7689C31.5498 24.7689 31.6453 24.7689 31.7725 24.7689C31.8997 24.7689 32.0269 24.7689 32.1859 24.7689C32.2495 24.7689 32.2813 24.7689 32.3131 24.7374C32.345 24.7059 32.345 24.7059 32.345 24.6744C32.345 24.6429 32.345 24.6429 32.3131 24.6429C32.3131 24.6429 32.2813 24.6114 32.2495 24.6114C32.2177 24.6114 32.1859 24.6114 32.1223 24.6114C32.0587 24.6114 32.0269 24.6114 31.9633 24.6114C31.8997 24.6114 31.8679 24.6114 31.8043 24.5799C31.7089 24.5799 31.6453 24.5483 31.5817 24.4853C31.5498 24.4538 31.4862 24.3908 31.4862 24.2962C31.4862 24.2017 31.4544 24.1387 31.4544 24.0441C31.4226 23.9181 31.4226 23.729 31.4226 23.5399C31.4226 23.3509 31.3908 23.0988 31.3908 22.8467C31.3908 22.5946 31.3908 22.311 31.3908 21.9958V21.1135C31.3908 21.082 31.3908 21.082 31.4226 21.082C31.4544 21.082 31.4544 21.082 31.4544 21.082H35.4936C35.5254 21.082 35.5254 21.082 35.5254 21.082L35.5572 21.1135V21.9958C35.5572 22.311 35.5572 22.5946 35.5572 22.8467C35.5572 23.0988 35.5572 23.3509 35.5572 23.5399C35.5572 23.7605 35.5254 23.9181 35.5254 24.0441C35.5254 24.1387 35.4936 24.2017 35.4936 24.2962C35.4936 24.3908 35.4618 24.4223 35.43 24.4853C35.3982 24.5168 35.3346 24.5799 35.271 24.5799C35.2391 24.5799 35.1755 24.6114 35.1437 24.6114C35.1119 24.6114 35.0483 24.6114 35.0165 24.6114C34.9847 24.6114 34.9847 24.6114 34.9529 24.6429C34.9211 24.6744 34.9211 24.6744 34.9211 24.6744C34.9211 24.7059 34.9211 24.7059 34.9529 24.7374C34.9847 24.7689 35.0165 24.7689 35.0801 24.7689C35.1437 24.7689 35.2391 24.7689 35.3346 24.7689C35.43 24.7689 35.5254 24.7689 35.6208 24.7689C35.7162 24.7689 35.8116 24.7689 35.8752 24.7689C35.9388 24.7689 36.0024 24.7689 36.0024 24.7689C36.0342 24.7689 36.0661 24.7689 36.1297 24.7689C36.1933 24.7689 36.2887 24.7689 36.4159 24.7689C36.5431 24.7689 36.6385 24.7689 36.7657 24.7689C36.893 24.7689 37.0202 24.7689 37.1792 24.7689C37.2428 24.7689 37.2746 24.7689 37.3064 24.7374C37.3382 24.7059 37.3382 24.7059 37.3382 24.6744C37.3382 24.6429 37.3382 24.6429 37.3064 24.6429C37.3064 24.6429 37.2746 24.6114 37.2428 24.6114C37.211 24.6114 37.1792 24.6114 37.1156 24.6114C37.052 24.6114 37.0202 24.6114 36.9566 24.6114C36.893 24.6114 36.8612 24.6114 36.7976 24.5799C36.7021 24.5799 36.6385 24.5483 36.5749 24.4853C36.5431 24.4538 36.4795 24.3908 36.4795 24.2962C36.4795 24.2017 36.4477 24.1387 36.4477 24.0441C36.4159 23.9181 36.4159 23.729 36.4159 23.5399C36.4159 23.3509 36.3841 23.0988 36.3841 22.8467C36.3841 22.5946 36.3841 22.311 36.3841 21.9958V20.3257H36.4159ZM43.3492 24.8635C43.5083 24.8635 43.6673 24.8635 43.8263 24.8635C43.9853 24.8635 44.1443 24.832 44.3034 24.832C44.4624 24.8004 44.5896 24.8004 44.7168 24.7689C44.844 24.7374 44.9713 24.7059 45.0667 24.6744C45.1303 24.6429 45.1621 24.6429 45.1939 24.6114C45.2257 24.5799 45.2575 24.5799 45.2575 24.5483C45.2575 24.5168 45.2893 24.4853 45.2893 24.4223C45.3211 24.3593 45.3211 24.2647 45.3529 24.1702C45.3847 24.0757 45.3847 23.9811 45.4165 23.8551C45.4483 23.729 45.4483 23.6345 45.4483 23.5399C45.4801 23.4454 45.4801 23.3824 45.4801 23.3194C45.4801 23.2563 45.4801 23.1933 45.4801 23.1933C45.4801 23.1618 45.4801 23.1303 45.4483 23.0988C45.4483 23.0673 45.4165 23.0673 45.4165 23.0673C45.4165 23.0673 45.3847 23.0673 45.3529 23.0988C45.3211 23.1303 45.3211 23.1618 45.3211 23.2248C45.3211 23.2563 45.2893 23.3194 45.2893 23.3824C45.2575 23.4454 45.2575 23.5084 45.2257 23.603C45.1939 23.6975 45.1621 23.7605 45.1303 23.8236C45.0985 23.8866 45.0349 23.9496 45.0031 24.0126C44.8758 24.1387 44.7168 24.2332 44.5578 24.2962C44.3988 24.3593 44.208 24.4223 44.0171 24.4223C43.7945 24.4538 43.6037 24.4538 43.3492 24.4538C42.9358 24.4538 42.5541 24.3908 42.2043 24.2647C41.8544 24.1387 41.5364 23.9811 41.2502 23.7605C40.9639 23.5399 40.7413 23.2878 40.5187 23.0042C40.296 22.7206 40.1688 22.4055 40.0416 22.0588C39.9144 21.7122 39.8826 21.3656 39.8826 21.0189C39.8826 20.6723 39.9144 20.3572 39.978 20.042C40.0416 19.7269 40.137 19.4433 40.2642 19.1912C40.3914 18.9391 40.5823 18.687 40.8049 18.4979C41.0275 18.3088 41.3138 18.1513 41.6954 18.0567C42.0453 17.9307 42.4587 17.8992 42.9676 17.8992C43.1902 17.8992 43.4446 17.9307 43.6673 17.9307C43.8899 17.9622 44.1125 18.0252 44.3034 18.0883C44.4942 18.1513 44.685 18.2458 44.8122 18.3719C44.9394 18.4979 45.0667 18.624 45.1621 18.7815C45.2575 18.9391 45.2893 19.1597 45.2893 19.3803C45.2893 19.4433 45.2893 19.5063 45.2893 19.5378C45.2893 19.5694 45.3211 19.5694 45.3529 19.5694C45.3847 19.5694 45.3847 19.5378 45.4165 19.5063C45.4483 19.4748 45.4483 19.4118 45.4483 19.3173C45.4483 19.2227 45.4483 19.0967 45.4483 18.9706C45.4483 18.7815 45.4483 18.624 45.4801 18.4664C45.5119 18.3088 45.5119 18.1828 45.5119 18.0883C45.5119 17.9937 45.5437 17.9307 45.5437 17.8677C45.5437 17.8362 45.5437 17.8046 45.5119 17.8046C45.4801 17.7731 45.4483 17.7731 45.4165 17.7731C45.3211 17.7731 45.1939 17.7416 45.0667 17.7416C44.9076 17.7101 44.7486 17.6786 44.5578 17.6471C44.367 17.6156 44.1443 17.5841 43.8899 17.5525C43.6355 17.521 43.381 17.521 43.0948 17.521C42.5859 17.521 42.1407 17.5841 41.759 17.6786C41.3456 17.7731 41.0275 17.9307 40.7413 18.1198C40.455 18.3088 40.2006 18.5294 39.978 18.75C39.7872 18.9706 39.6281 19.2542 39.5009 19.5063C39.3737 19.7899 39.2783 20.042 39.2147 20.3257C39.1511 20.6093 39.1193 20.8614 39.1193 21.1135C39.1193 21.5546 39.1829 21.9643 39.2783 22.3425C39.3737 22.7206 39.5645 23.0673 39.7872 23.3824C40.0098 23.6975 40.296 23.9811 40.6459 24.2017C40.9957 24.4223 41.3774 24.6114 41.8544 24.7374C42.3315 24.8635 42.7768 24.8635 43.3492 24.8635Z" fill="#2B5D84"/>
              <path class="fill fill-12" d="M48.9462 21.6808H46.8789V21.1135H48.9462V19.0337H49.5823V21.1135H51.6495V21.6808H49.5823V23.7606H48.9462V21.6808Z" fill="#2B5D84"/>
              <path class="fill fill-13" d="M1.81316 29.2124V27.4162L0.636402 29.2124H0.318359V27.1011H0.572794V28.8973L1.74955 27.1011H2.06759V29.2124H1.81316Z" fill="#6290CC"/>
              <path class="fill fill-14" d="M4.89854 29.2124V28.2355H3.68998V29.2124H3.43555V27.1011H3.68998V27.9834H4.89854V27.1011H5.15298V29.2124H4.89854Z" fill="#6290CC"/>
              <path class="fill fill-15" d="M7.34642 27.3217V29.2124H7.09198V27.3217H6.29688V27.1011H8.14152V27.3217H7.34642Z" fill="#6290CC"/>
              <path class="fill fill-16" d="M10.1461 29.2755C9.54181 29.2755 9.16016 28.8343 9.16016 28.1725C9.16016 27.5108 9.57361 27.0381 10.1461 27.0381C10.7822 27.0381 11.0684 27.5423 11.0684 28.141V28.2041H9.41459C9.41459 28.6452 9.60542 29.0549 10.1461 29.0549C10.4959 29.0549 10.7186 28.8658 10.7822 28.4877H11.0366C10.9412 28.9604 10.6232 29.2755 10.1461 29.2755ZM10.1143 27.2587C9.63722 27.2587 9.4782 27.6053 9.41459 28.015H10.814C10.7822 27.5423 10.5277 27.2587 10.1143 27.2587Z" fill="#6290CC"/>
              <path class="fill fill-17" d="M12.563 27.5108C12.722 27.1956 12.9765 27.0381 13.3263 27.0381C13.8988 27.0381 14.2805 27.4793 14.2805 28.1725C14.2805 28.8343 13.8988 29.2755 13.3263 29.2755C12.9765 29.2755 12.722 29.1179 12.563 28.8343V30.0003H12.3086V27.1011H12.5312V27.5108H12.563ZM12.563 28.141C12.563 28.7083 12.8493 29.0234 13.2945 29.0234C13.7398 29.0234 14.026 28.6767 14.026 28.141C14.026 27.5738 13.7398 27.2272 13.2945 27.2272C12.8493 27.2272 12.563 27.5738 12.563 28.141Z" fill="#6290CC"/>
              <path class="fill fill-18" d="M17.047 29.2124V28.2355H15.8384V29.2124H15.584V27.1011H15.8384V27.9834H17.047V27.1011H17.3014V29.2124H17.047Z" fill="#6290CC"/>
              <path class="fill fill-19" d="M19.5289 29.2755C18.9246 29.2755 18.543 28.8343 18.543 28.1725C18.543 27.5108 18.9564 27.0381 19.5289 27.0381C20.165 27.0381 20.4512 27.5423 20.4512 28.141V28.2041H18.7974C18.7974 28.6452 18.9882 29.0549 19.5289 29.0549C19.8787 29.0549 20.1014 28.8658 20.165 28.4877H20.4194C20.3558 28.9604 20.0378 29.2755 19.5289 29.2755ZM19.5289 27.2587C19.0518 27.2587 18.8928 27.6053 18.8292 28.015H20.1968C20.1968 27.5423 19.9106 27.2587 19.5289 27.2587Z" fill="#6290CC"/>
              <path class="fill fill-20" d="M22.5183 27.3217V29.2124H22.2639V27.3217H21.4688V27.1011H23.3134V27.3217H22.5183Z" fill="#6290CC"/>
              <path class="fill fill-21" d="M25.4753 28.2042H24.4258V27.9521H25.4753V28.2042Z" fill="#6290CC"/>
              <path class="fill fill-22" d="M28.7205 29.1809C28.6569 29.2125 28.5932 29.2125 28.4978 29.2125C28.2434 29.2125 28.2116 29.0234 28.2116 28.8343C28.0526 29.1179 27.7663 29.244 27.4165 29.244C26.9712 29.244 26.7168 29.0234 26.7168 28.6452C26.7168 28.2671 26.9712 28.0465 27.5119 27.9835C27.8617 27.952 28.0208 27.952 28.148 27.8574C28.2116 27.8259 28.2116 27.7629 28.2116 27.6683C28.2116 27.3217 27.989 27.2272 27.6709 27.2272C27.3211 27.2272 27.1303 27.3847 27.0984 27.7314H26.844C26.8758 27.2902 27.1621 27.0381 27.7027 27.0381C28.1798 27.0381 28.4978 27.2587 28.4978 27.6368V28.7713C28.4978 28.8973 28.4978 28.9919 28.625 28.9919C28.6569 28.9919 28.6887 28.9919 28.7205 28.9919V29.1809ZM27.6391 28.2041C27.3847 28.2356 27.003 28.2986 27.003 28.6452C27.003 28.8973 27.1939 29.0549 27.4801 29.0549C27.8617 29.0549 28.2116 28.8028 28.2116 28.3931V28.0465C28.148 28.141 27.9254 28.1725 27.6391 28.2041Z" fill="#6290CC"/>
              <path class="fill fill-23" d="M30.1822 27.3217V29.2124H29.9277V27.1011H31.3271V27.3217H30.1822Z" fill="#6290CC"/>
              <path class="fill fill-24" d="M33.2984 29.2755C32.6942 29.2755 32.3125 28.8343 32.3125 28.1725C32.3125 27.5108 32.726 27.0381 33.2984 27.0381C33.9345 27.0381 34.2208 27.5423 34.2208 28.141V28.2041H32.5669C32.5669 28.6452 32.7896 29.0549 33.2984 29.0549C33.6483 29.0549 33.8709 28.8658 33.9345 28.4877H34.189C34.1253 28.9604 33.8073 29.2755 33.2984 29.2755ZM33.2666 27.2587C32.7896 27.2587 32.6305 27.6053 32.5669 28.015H33.9345C33.9345 27.5423 33.6801 27.2587 33.2666 27.2587Z" fill="#6290CC"/>
              <path class="fill fill-25" d="M36.9259 29.2124V28.2355H35.7173V29.2124H35.4629V27.1011H35.7173V27.9834H36.9259V27.1011H37.1803V29.2124H36.9259Z" fill="#6290CC"/>
              <path class="fill fill-26" d="M39.3738 27.3217V29.2124H39.1193V27.3217H38.3242V27.1011H40.1689V27.3217H39.3738Z" fill="#6290CC"/>
              <path class="fill fill-27" d="M42.1734 29.2755C41.5692 29.2755 41.1875 28.8343 41.1875 28.1725C41.1875 27.4793 41.5692 27.0381 42.1734 27.0381C42.6505 27.0381 43.0003 27.3217 43.0321 27.7629H42.7777C42.7141 27.4162 42.4915 27.2587 42.1734 27.2587C41.7282 27.2587 41.4419 27.6053 41.4419 28.1725C41.4419 28.7398 41.7282 29.0864 42.1416 29.0864C42.4915 29.0864 42.7459 28.8658 42.7777 28.4877H43.0321C43.0003 28.9288 42.7141 29.2755 42.1734 29.2755Z" fill="#6290CC"/>
              <path class="fill fill-28" d="M45.1316 27.3217V29.2124H44.8771V27.3217H44.082V27.1011H45.9267V27.3217H45.1316Z" fill="#6290CC"/>
              <path class="fill fill-29" d="M48.0563 29.2124H47.0703V27.1011H48.0563C48.5015 27.1011 48.7241 27.2901 48.7241 27.6053C48.7241 27.8574 48.5969 28.0149 48.3425 28.078C48.6287 28.141 48.7877 28.2986 48.7877 28.6137C48.8196 28.9918 48.5333 29.2124 48.0563 29.2124ZM48.0244 27.3217H47.3247V28.0149H48.0244C48.3107 28.0149 48.4697 27.8889 48.4697 27.6683C48.4697 27.4162 48.3425 27.3217 48.0244 27.3217ZM48.0244 28.204H47.3247V28.9918H48.0244C48.3743 28.9918 48.5651 28.8658 48.5651 28.5822C48.5651 28.3301 48.3743 28.204 48.0244 28.204Z" fill="#6290CC"/>
              <path class="fill fill-30" d="M51.9998 28.141C51.9998 28.8343 51.6181 29.244 51.0138 29.244C50.3777 29.244 49.9961 28.8028 49.9961 28.141C49.9961 27.4793 50.3777 27.0381 51.0138 27.0381C51.6181 27.0381 51.9998 27.4793 51.9998 28.141ZM50.2505 28.141C50.2505 28.7083 50.5368 29.0549 51.0138 29.0549C51.4591 29.0549 51.7453 28.7083 51.7453 28.1725C51.7453 27.6368 51.4591 27.2587 51.0138 27.2587C50.5368 27.2587 50.2505 27.6053 50.2505 28.141Z" fill="#6290CC"/>
              </g>
              <defs>
              <clipPath id="clip0">
              <rect width="52" height="30" fill="white"/>
              </clipPath>
              </defs>
              </svg>

            </a>
          </div>
        </div>
      </div>
    </footer>

    <div class="is-modals">
      <div
        class="modal fade order-game"
        id="order-game"
        tabindex="-1"
        aria-labelledby="order-game-label"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="btn-close"
                data-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="order-game-name" class="form-label">
                  Ваше имя*
                </label>
                <input type="text" class="form-control" id="order-game-name" aria-describedby="order-game-name-help" required>
                <div id="order-game-name-help" class="form-text">
                  * Обязательно для заполнения
                </div>
              </div>
              <div class="mb-3">
                <label for="order-game-email" class="form-label">
                  Ваше email*
                </label>
                <input type="email" class="form-control" id="order-game-email" aria-describedby="order-game-email-help" required>
                <div id="order-game-email-help" class="form-text">
                  * Обязательно для заполнения
                </div>
              </div>
              <div class="mb-3">
                <label for="order-game-tel" class="form-label">
                  Телефон
                </label>
                <input type="tel" class="form-control" id="order-game-tel" aria-describedby="order-game-tel-help" required>
              </div>
              <div class="mb-3">
                <label for="order-game-tel" class="form-label">
                  Сообщение
                </label>
                <textarea type="textarea" class="form-control" id="order-game-tel" aria-describedby="order-game-tel-help" required></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="order-game-accept" required>
                <label class="form-check-label" for="order-game-acept">
                  Нажимая кнопку "Заказать" Вы даёте свое согласие на обработку персональных данных
                </label>
              </div>
              <button type="submit" class="btn d-block modal-submit">Заказать</button>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>
