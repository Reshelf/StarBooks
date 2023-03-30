@extends('app')

@section('title', __('Comieeについて'))
@php
  $faq_number = 1;
  $update_date = '2023/3/11';
  $content = __('Comieeはオンラインマンガ投稿プラットフォームで、クリエイターが作品を投稿し、読者が楽しんでサポートできる場を提供しています。');
@endphp

@section('description')
  <meta name="description" itemprop="description" content="{{ $content }}">
  <meta property="og:description" content="{{ $content }}">
  <meta name="twitter:description" content="{{ $content }}">
@endsection

@section('content')
  @include('atoms._nav', ['tab' => 0])
  <div class="w-full flex flex-col md:flex-row">

    {{-- メニュー --}}
    <div class="w-full md:w-[30%] bg-f8 dark:bg-dark p-8 flex flex-col items-end">
      <div class="lg:h-[500px] top-[20px] sticky  w-full md:w-auto md:pr-8">
        <div class="flex justify-start mb-12 text-xs">
          <a href="{{ route('others.user_guide') }}" class="pr-2">Help Center</a>>
          <a href="{{ route('others.about.comiee') }}" class="pl-2">{{ __('Comieeについて') }}</a>
        </div>

        <div class="my-12">
          <h3 class="text-xs mb-4 cursor-default">
            {{ __('メニュー') }}
          </h3>
          <a href="#welcome" class="pl-4 py-2 mb-2 block">
            {{ __('はじめに') }}</a>
          <a href="#about_comiee" class="pl-4 py-2 mb-2 block">
            {{ __('Comieeとは') }}</a>
          <a href="#important" class="pl-4 py-2 mb-2 block">
            {{ __('できること') }}</a>
          <a href="#service_philosophy" class="pl-4 py-2 mb-2 block">
            {{ __('サービスの理念') }}</a>
          <a href="#features" class="pl-4 py-2 mb-2 block">
            {{ __('特徴') }}</a>
          <a href="#reader_guide" class="pl-4 py-2 mb-2 block">
            {{ __('読者ガイド') }}{{ __('(準備中)') }}</a>
          <a href="#creater_guide" class="pl-4 py-2 mb-2 block">
            {{ __('クリエイターガイド') }}{{ __('(準備中)') }}</a>
          <a href="#lastly" class="pl-4 py-2 mb-2 block">
            {{ __('最後に') }}</a>
        </div>
      </div>
    </div>

    {{-- 本文 --}}
    <div class="w-full md:w-[70%] p-8 md:py-8 md:pl-20 md:pr-48">

      {{-- はじめに --}}
      <div id="welcome" class="mt-8 mb-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold pt-4 mb-4">{{ __('はじめに') }}</h2>
        <p class="mb-4">
          {{ __('Comiee（コミー）へようこそ！') }}
        </p>
        <p class="mb-4">
          {{ __('このページでは、Comieeについての説明と、具体的なご利用方法についてお伝えしていきます。') }}
        </p>
      </div>

      {{-- Comieeとは --}}
      <div id="about_comiee" class="my-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold mb-4 py-4 border-b border-[#dadce0] dark:border-dark-1">
          {{ __('Comieeとは') }}</h2>
        <div class="w-full">
          <svg class="object-contain w-full" viewBox="0 0 1080 566" fill="none">
            <title>Comiee logo</title>
            <rect width="1080" height="566" fill="white" />
            <mask id="mask0_1102_3572" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="215" y="206"
              width="196" height="154">
              <path
                d="M245.637 214.324C253.629 236.302 255.627 259.169 255.627 272.267C225.257 253.086 215.666 271.379 215 282.923C221.66 318.222 255.627 294.912 255.627 294.912C253.629 328.212 250.077 336.205 245.637 350.191C257.358 356.052 287.373 358.849 300.916 359.515C283.333 333.407 299.584 324.216 312.238 322.884C342.875 327.546 332.218 354.853 322.894 359.515C339.944 361.646 368.183 354.187 380.171 350.191C373.245 339.002 370.403 308.454 370.181 294.912C399.486 312.894 409.698 294.246 410.142 282.923C408.011 252.553 383.057 262.277 370.847 270.935C368.183 253.352 375.953 225.868 380.171 214.324C364.187 205.799 336.214 205.444 324.226 206.332C344.207 228.31 324.226 243.196 312.238 242.297C285.597 240.299 292.924 213.658 301.582 206.332C276.273 206.998 253.851 211.216 245.637 214.324Z"
                fill="#D7CCBE" />
            </mask>
            <g mask="url(#mask0_1102_3572)">
              <mask id="mask1_1102_3572" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="212" y="203"
                width="201" height="201">
                <rect x="212.335" y="203.336" width="199.804" height="199.804" fill="white" />
              </mask>
              <g mask="url(#mask1_1102_3572)">
                <path d="M415.104 272.484L227.362 435.458L177.788 346.568L415.104 272.484Z" fill="#EC3B73" />
                <path d="M322.227 351.726L379.329 402.676H265.126L322.227 351.726Z" fill="#C13573" />
                <path d="M321.021 352.35L431.504 332.066L405.844 425.992L321.021 352.35Z" fill="#ED4A8F" />
                <path d="M320.494 353.023L418.971 266.167L449.492 328.507L320.494 353.023Z" fill="#AC3C91" />
                <path d="M298.782 255.866L418.657 272.214L208.94 336.893L298.782 255.866Z" fill="#4E2B90" />
                <path d="M208.188 242.063L298.345 256.342L212.939 333.221L208.188 242.063Z" fill="#5FB6D5" />
                <path d="M395.663 179.402L467.197 280.671L298.246 256.099L395.663 179.402Z" fill="#933391" />
                <path d="M297.295 257.211L247.122 181.972L368.67 201.338L297.295 257.211Z" fill="#208FC2" />
                <path d="M297.947 257.489L179.367 238.596L231.469 157.494L297.947 257.489Z" fill="#F04791" />
              </g>
            </g>
            <path
              d="M470.113 319.491C463.113 319.491 456.78 317.957 451.113 314.891C445.513 311.757 441.113 307.491 437.913 302.091C434.713 296.624 433.113 290.491 433.113 283.691C433.113 276.891 434.713 270.791 437.913 265.391C441.113 259.924 445.547 255.657 451.213 252.591C456.88 249.457 463.213 247.891 470.213 247.891C475.68 247.891 480.68 248.824 485.213 250.691C489.747 252.491 493.613 255.191 496.813 258.791L490.313 265.091C485.047 259.557 478.48 256.791 470.613 256.791C465.413 256.791 460.713 257.957 456.513 260.291C452.313 262.624 449.013 265.857 446.613 269.991C444.28 274.057 443.113 278.624 443.113 283.691C443.113 288.757 444.28 293.357 446.613 297.491C449.013 301.557 452.313 304.757 456.513 307.091C460.713 309.424 465.413 310.591 470.613 310.591C478.413 310.591 484.98 307.791 490.313 302.191L496.813 308.491C493.613 312.091 489.713 314.824 485.113 316.691C480.58 318.557 475.58 319.491 470.113 319.491ZM530.133 319.291C524.866 319.291 520.133 318.124 515.933 315.791C511.733 313.457 508.433 310.257 506.033 306.191C503.7 302.057 502.533 297.391 502.533 292.191C502.533 286.991 503.7 282.357 506.033 278.291C508.433 274.157 511.733 270.957 515.933 268.691C520.133 266.357 524.866 265.191 530.133 265.191C535.4 265.191 540.1 266.357 544.233 268.691C548.433 270.957 551.7 274.157 554.033 278.291C556.433 282.357 557.633 286.991 557.633 292.191C557.633 297.391 556.433 302.057 554.033 306.191C551.7 310.257 548.433 313.457 544.233 315.791C540.1 318.124 535.4 319.291 530.133 319.291ZM530.133 310.891C533.533 310.891 536.566 310.124 539.233 308.591C541.966 306.991 544.1 304.791 545.633 301.991C547.166 299.124 547.933 295.857 547.933 292.191C547.933 288.524 547.166 285.291 545.633 282.491C544.1 279.624 541.966 277.424 539.233 275.891C536.566 274.357 533.533 273.591 530.133 273.591C526.733 273.591 523.666 274.357 520.933 275.891C518.266 277.424 516.133 279.624 514.533 282.491C513 285.291 512.233 288.524 512.233 292.191C512.233 295.857 513 299.124 514.533 301.991C516.133 304.791 518.266 306.991 520.933 308.591C523.666 310.124 526.733 310.891 530.133 310.891ZM637.21 265.191C643.876 265.191 649.143 267.124 653.01 270.991C656.943 274.857 658.91 280.591 658.91 288.191V318.691H649.31V289.291C649.31 284.157 648.11 280.291 645.71 277.691C643.376 275.091 640.01 273.791 635.61 273.791C630.743 273.791 626.876 275.324 624.01 278.391C621.143 281.391 619.71 285.724 619.71 291.391V318.691H610.11V289.291C610.11 284.157 608.91 280.291 606.51 277.691C604.176 275.091 600.81 273.791 596.41 273.791C591.543 273.791 587.676 275.324 584.81 278.391C581.943 281.391 580.51 285.724 580.51 291.391V318.691H570.91V265.691H580.11V273.591C582.043 270.857 584.576 268.791 587.71 267.391C590.843 265.924 594.41 265.191 598.41 265.191C602.543 265.191 606.21 266.024 609.41 267.691C612.61 269.357 615.076 271.791 616.81 274.991C618.81 271.924 621.576 269.524 625.11 267.791C628.71 266.057 632.743 265.191 637.21 265.191ZM676.574 265.691H686.174V318.691H676.574V265.691ZM681.374 255.491C679.507 255.491 677.94 254.891 676.674 253.691C675.474 252.491 674.874 251.024 674.874 249.291C674.874 247.557 675.474 246.091 676.674 244.891C677.94 243.624 679.507 242.991 681.374 242.991C683.24 242.991 684.774 243.591 685.974 244.791C687.24 245.924 687.874 247.357 687.874 249.091C687.874 250.891 687.24 252.424 685.974 253.691C684.774 254.891 683.24 255.491 681.374 255.491ZM728.403 310.891C734.737 310.891 739.837 308.757 743.703 304.491L748.903 310.691C746.57 313.491 743.603 315.624 740.003 317.091C736.47 318.557 732.503 319.291 728.103 319.291C722.503 319.291 717.537 318.157 713.203 315.891C708.87 313.557 705.503 310.324 703.103 306.191C700.77 302.057 699.603 297.391 699.603 292.191C699.603 287.057 700.737 282.424 703.003 278.291C705.337 274.157 708.503 270.957 712.503 268.691C716.57 266.357 721.137 265.191 726.203 265.191C731.003 265.191 735.37 266.291 739.303 268.491C743.237 270.624 746.37 273.657 748.703 277.591C751.037 281.524 752.237 286.057 752.303 291.191L710.203 299.391C711.537 303.057 713.77 305.891 716.903 307.891C720.103 309.891 723.937 310.891 728.403 310.891ZM726.203 273.291C722.87 273.291 719.87 274.057 717.203 275.591C714.603 277.124 712.57 279.291 711.103 282.091C709.637 284.824 708.903 288.024 708.903 291.691V292.691L742.803 286.291C741.937 282.424 740.003 279.291 737.003 276.891C734.003 274.491 730.403 273.291 726.203 273.291ZM789.634 310.891C795.967 310.891 801.067 308.757 804.934 304.491L810.134 310.691C807.8 313.491 804.834 315.624 801.234 317.091C797.7 318.557 793.734 319.291 789.334 319.291C783.734 319.291 778.767 318.157 774.434 315.891C770.1 313.557 766.734 310.324 764.334 306.191C762 302.057 760.834 297.391 760.834 292.191C760.834 287.057 761.967 282.424 764.234 278.291C766.567 274.157 769.734 270.957 773.734 268.691C777.8 266.357 782.367 265.191 787.434 265.191C792.234 265.191 796.6 266.291 800.534 268.491C804.467 270.624 807.6 273.657 809.934 277.591C812.267 281.524 813.467 286.057 813.534 291.191L771.434 299.391C772.767 303.057 775 305.891 778.134 307.891C781.334 309.891 785.167 310.891 789.634 310.891ZM787.434 273.291C784.1 273.291 781.1 274.057 778.434 275.591C775.834 277.124 773.8 279.291 772.334 282.091C770.867 284.824 770.134 288.024 770.134 291.691V292.691L804.034 286.291C803.167 282.424 801.234 279.291 798.234 276.891C795.234 274.491 791.634 273.291 787.434 273.291Z"
              fill="#16184B" />
          </svg>
        </div>
        <p class="my-4">{{ __('Comiee（コミー）はクリエイターがマンガを投稿して、読者がそのコンテンツを楽しんで応援できるオンラインマンガプラットフォームです。') }}</p>
      </div>

      {{-- できること --}}
      <div id="important" class="my-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold mb-4 py-4 border-b border-[#dadce0] dark:border-dark-1">
          {{ __('できること') }}
        </h2>
        <div class="mb-4">
          <p>{{ __('・自分の描いたマンガ作品を投稿する') }}</p>
          <p>{{ __('・好きなクリエイターさんのマンガを応援して読む') }}</p>
        </div>
      </div>

      {{-- サービスの理念 --}}
      <div id="service_philosophy" class="my-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold mb-4 py-4 border-b border-[#dadce0] dark:border-dark-1">
          {{ __('サービスの理念') }}</h2>
        <div class="">
          <p class="mb-4">
            {{ __('Comieeは「作品を安心して継続的に投稿できるプラットフォームをクリエイターに提供することで、多くの素晴らしい作品が生まれるのをサポートする」ことをミッションに掲げています。そのため、以下の3つをサービスの理念として運営しています。') }}
          </p>
          <div class="mb-4">
            <p>{{ __('・クリエイターの資産を守り、最大化する') }}</p>
            <p>{{ __('・使いやすく、よりよい作品を生み出すきっかけになるようなプラットフォームをデザインする') }}</p>
            <p>{{ __('・常に先見性を持って高付加価値サービスを追求、提供することで、マンガ業界に貢献する') }}</p>
          </div>
        </div>
      </div>

      {{-- 特徴 --}}
      <div id="features" class="my-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold mb-4 py-4 border-b border-[#dadce0] dark:border-dark-1">
          {{ __('特徴') }}
        </h2>
        <div class="mb-4">
          <p>{{ __('・好きなタイミングで投稿・公開ができる') }}</p>
          <p>{{ __('・少年、青年、少女、女性の作品ジャンルで、アダルト作品の禁止') }}</p>
          <p>{{ __('・クリエイターの権利を守るために、作品の違法ダウンロードやスクリーンショット(PC)をできなくしている') }}</p>
          <p>{{ __('・多言語化') }}</p>
          <p>{{ __('・作品の細かい設定(カラー作品、非公開、休載など)') }}</p>
          <p>{{ __('・分析（予定）') }}</p>
        </div>
      </div>

      {{-- 読者ガイド --}}
      <div id="reader_guide" class="my-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold mb-4 py-4 border-b border-[#dadce0] dark:border-dark-1">
          {{ __('読者ガイド') }}{{ __('(準備中)') }}
        </h2>
        <div class="">
          <p>{{ __('・プロフィール') }}</p>
          <p>{{ __('・クリエイターのチャンネル登録をする') }}</p>
          <p>{{ __('・作品を探す') }}</p>
          <p>{{ __('・作品を読む') }}</p>
          <p>{{ __('・無料') }}</p>
          <p>{{ __('・有料') }}</p>
          <p>{{ __('・作品を買う') }}</p>
          <p>{{ __('・スーパーギフト') }}</p>
          <p>{{ __('・作品にコメントする') }}</p>
          <p>{{ __('・本棚(お気に入り、閲覧履歴、購入履歴)') }}</p>
          <p>{{ __('・設定') }}</p>
        </div>
      </div>

      {{-- クリエイターガイド --}}
      <div id="creater_guide" class="my-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold mb-4 py-4 border-b border-[#dadce0] dark:border-dark-1">
          {{ __('クリエイターガイド') }}{{ __('(準備中)') }}</h2>
        <div class="">
          <p>{{ __('・作品について') }}</p>
          <p>{{ __('・エピソードについて') }}</p>
          <p>{{ __('・スーパーギフトについて') }}</p>
          <p>{{ __('・契約書の締結') }}</p>
          <p>{{ __('・収益受け取りの設定') }}</p>
        </div>
      </div>

      {{-- 最後に --}}
      <div id="lastly" class="my-12 leading-8 text-base whitespace-pre-line">
        <h2 class="dark:text-f5 text-2xl font-bold mb-4 py-4 border-b border-[#dadce0] dark:border-dark-1">
          {{ __('最後に') }}</h2>
        <div class="">
          <p class="mb-4">
            {{ __('より詳しい使い方については、Comieeヘルプページをご覧ください。このページだけでは伝えきれないことも書いてあるので、困ったときは一度ご覧ください。') }}
          </p>
          <a href="{{ route('others.user_guide') }}" class="block mb-4 text-primary dark:text-f5">
            {{ __('▼ Comieeヘルプセンター') }}
          </a>
          <p class="mb-4">
            {{ __('Comieeをより使いやすいものにするために、日々改善に取り組んでいます。ぜひ以下のフォームからみなさまのご意見をお聞かせください。') }}
          </p>
          <a href="mailto:support@comiee.one?subject={{ __('改善点のお問い合わせ') }}"
            class="block mb-4 text-primary dark:text-f5" target="_blank" rel="noopener">
            {{ __('▼ お問い合わせはこちら') }}
          </a>
        </div>
      </div>
    </div>
  </div> @include('atoms._footer')
@endsection
