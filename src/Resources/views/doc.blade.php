<!DOCTYPE html>
<html lang="en" class="">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>Code package generator</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="secured message" />

	<meta name="description" content="secured message" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content=" the secrete massage" />
	<meta property="og:description" content=" the secrete massage" />
	<meta property="og:site_name" content=" the secrete massage" />

	<!--End of Zopim Live Chat Script-->
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href=" {{ asset('laravel-doc/assets/css/dark-theme.css') }}" rel="stylesheet">
	<link href="{{ asset('laravel-doc/assets/css/style.css') }}" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- <link rel="icon" href="img/favicon.ico" type="image/ico" sizes="16x16"> -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="bg-slate-100 dark:bg-slate-600">
	<div class="absolute z-10 left-2 bottom-2 p-2">
		<a class="hs-dark-mode-active:hidden block hs-dark-mode flex items-center text-slate-700 hover:text-blue-500 font-medium"
			href="javascript:;" data-hs-theme-click-value="dark">
			<span class="bg-gray-500 mr-2 p-2 text-white rounded-3xl">
				<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					viewBox="0 0 16 16">
					<path
						d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
				</svg>
			</span>
			Dark mode
		</a>
		<a class="hs-dark-mode-active:block hidden hs-dark-mode group flex items-center text-slate-400 hover:text-white font-medium"
			href="javascript:;" data-hs-theme-click-value="light">
			<span class="bg-white mr-2 p-2 text-slate-900 rounded-3xl">
				<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					viewBox="0 0 16 16">
					<path
						d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
				</svg>
			</span>
			Light mode
		</a>
	</div>
	<div class="flex">
		<div
			class="bg-white dark:bg-slate-700 w-[280px] min-w-[325px] h-[100vh] overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0">
			<h6 class="bg-gray-500 dark:bg-slate-800 text-white font-medium px-4 py-3">Code package generator</h6>
			<div class="px-4 mt-4">
				<input
					class="w-full bg-slate-100 dark:bg-slate-600 dark:text-white border-2 border-gray-500 rounded-full h-[44px] px-4 leading-[44px] outline-0"
					type="text" id="menu-search" placeholder="Type to search">
			</div>
			<nav class="hs-accordion-group p-4 w-full flex flex-col flex-wrap">
				<ul class="space-y-1.5">
					<li class="hs-accordion">
						<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
							href="javascript:;">
							<svg fill="currentColor" width="16" height="16" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M11.3103 1.77586C11.6966 1.40805 12.3034 1.40805 12.6897 1.77586L20.6897 9.39491L23.1897 11.7759C23.5896 12.1567 23.605 12.7897 23.2241 13.1897C22.8433 13.5896 22.2103 13.605 21.8103 13.2241L21 12.4524V20C21 21.1046 20.1046 22 19 22H14H10H5C3.89543 22 3 21.1046 3 20V12.4524L2.18966 13.2241C1.78972 13.605 1.15675 13.5896 0.775862 13.1897C0.394976 12.7897 0.410414 12.1567 0.810345 11.7759L3.31034 9.39491L11.3103 1.77586ZM5 10.5476V20H9V15C9 13.3431 10.3431 12 12 12C13.6569 12 15 13.3431 15 15V20H19V10.5476L12 3.88095L5 10.5476ZM13 20V15C13 14.4477 12.5523 14 12 14C11.4477 14 11 14.4477 11 15V20H13Z"
									fill="currentColor" />
							</svg>
							Getting started

							<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
								width="16" height="16" viewBox="0 0 16 16" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
									stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
							</svg>
						</a>

						<div
							class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
							<ul class="pl-2">
								<li>
									<a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
										href="javascript:;">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" viewBox="0 0 52 52">
											<path
												d="M8.55,36.91A6.55,6.55,0,1,1,2,43.45,6.54,6.54,0,0,1,8.55,36.91Zm17.45,0a6.55,6.55,0,1,1-6.55,6.54A6.55,6.55,0,0,1,26,36.91Zm17.45,0a6.55,6.55,0,1,1-6.54,6.54A6.54,6.54,0,0,1,43.45,36.91ZM8.55,19.45A6.55,6.55,0,1,1,2,26,6.55,6.55,0,0,1,8.55,19.45Zm17.45,0A6.55,6.55,0,1,1,19.45,26,6.56,6.56,0,0,1,26,19.45Zm17.45,0A6.55,6.55,0,1,1,36.91,26,6.55,6.55,0,0,1,43.45,19.45ZM8.55,2A6.55,6.55,0,1,1,2,8.55,6.54,6.54,0,0,1,8.55,2ZM26,2a6.55,6.55,0,1,1-6.55,6.55A6.55,6.55,0,0,1,26,2ZM43.45,2a6.55,6.55,0,1,1-6.54,6.55A6.55,6.55,0,0,1,43.45,2Z"
												fill-rule="evenodd" />
										</svg>
										Overview
									</a>
								</li>
								<li>
									<a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
										href="javascript:;">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" viewBox="0 0 16 16">
											<path
												d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z">
											</path>
											<path
												d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z">
											</path>
										</svg>
										README
									</a>
								</li>
								<li>
									<a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
										href="javascript:;">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" viewBox="0 0 16 16">
											<path
												d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z">
											</path>
											<path
												d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z">
											</path>
										</svg>
										CHANGELOG
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="hs-accordion @if (str_contains($activeClass, 'Controllers') || str_contains($activeClass, 'Services')|| str_contains($activeClass, 'Repositories')||str_contains($activeClass, 'Models')||str_contains($activeClass, 'Providers') || str_contains($activeClass, 'Helpers') || str_contains($activeClass, 'Traits')) active	@endif" id="modules">
						<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 @if (count($controllers) > 0 || count($services) >0) hs-active:text-blue-500	@endif   hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
							href="javascript:;">
							<svg fill="currentColor" viewBox="0 0 32 32" width="16" height="16"
								xmlns="http://www.w3.org/2000/svg">
								<title>alt-grid</title>
								<path
									d="M0 26.016q0 2.496 1.76 4.224t4.256 1.76h20q2.464 0 4.224-1.76t1.76-4.224v-20q0-2.496-1.76-4.256t-4.224-1.76h-20q-2.496 0-4.256 1.76t-1.76 4.256v20zM4 26.016v-20q0-0.832 0.576-1.408t1.44-0.608h20q0.8 0 1.408 0.608t0.576 1.408v20q0 0.832-0.576 1.408t-1.408 0.576h-20q-0.832 0-1.44-0.576t-0.576-1.408zM8 24h6.016v-5.984h-6.016v5.984zM8 14.016h6.016v-6.016h-6.016v6.016zM10.016 22.016v-2.016h1.984v2.016h-1.984zM10.016 12v-1.984h1.984v1.984h-1.984zM18.016 24h5.984v-5.984h-5.984v5.984zM18.016 14.016h5.984v-6.016h-5.984v6.016zM20 22.016v-2.016h2.016v2.016h-2.016zM20 12v-1.984h2.016v1.984h-2.016z">
								</path>
							</svg>
							Modules

							<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
								width="16" height="16" viewBox="0 0 16 16" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
									stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
							</svg>
						</a>

						<div
							class="hs-accordion-content w-full overflow-hidden show-li transition-[height] duration-300 hidden" @if (str_contains($activeClass, 'Controllers') || str_contains($activeClass, 'Services') || str_contains($activeClass, 'Repositories')||str_contains($activeClass, 'Models')||str_contains($activeClass, 'Providers') || str_contains($activeClass, 'Helpers') || str_contains($activeClass, 'Traits'))
							style="display:block;"
							@endif  id="moduleSecltion">
							<ul class="hs-accordion-group pl-3" id="accordion-toggle-data">
								<li  class="hidden">
									<li class="hs-accordion @if (str_contains($activeClass, 'Controllers')) active	@endif">
										<span
										class="py-2 text-sm block font-medium text-slate-500 dark:text-slate-300">AppModule</span>
									<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700  hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
										href="javascript:;">
										<svg width="16" height="16" viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M1.5 0A1.5 1.5 0 000 1.5v5A1.5 1.5 0 001.5 8h5A1.5 1.5 0 008 6.5v-5A1.5 1.5 0 006.5 0h-5zM13.293 7.707a1 1 0 101.414-1.414L13.414 5H17.5a.5.5 0 01.5.5V9a1 1 0 102 0V5.5A2.5 2.5 0 0017.5 3h-4.086l1.293-1.293A1 1 0 0013.293.293l-3 3a1 1 0 000 1.414l3 3zM6.707 12.293a1 1 0 00-1.414 1.414L6.586 15H2.5a.5.5 0 01-.5-.5V11a1 1 0 10-2 0v3.5A2.5 2.5 0 002.5 17h4.086l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414l-3-3zM20 18.5a1.5 1.5 0 01-1.5 1.5h-5a1.5 1.5 0 01-1.5-1.5v-5a1.5 1.5 0 011.5-1.5h5a1.5 1.5 0 011.5 1.5v5z"
												fill="currentColor" />
										</svg>

										Controllers

										<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
											width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
												stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</a>

									<div
										class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!str_contains($activeClass, 'Controllers')) hidden @endif"  @if (str_contains($activeClass, 'Controllers'))
										style="display:block;"
										@endif >
										<ul class="pl-2">
                                            @foreach ($controllers as $controller)
											<li>
												<a class="flex items-center menu-bar  gap-x-3.5 py-2 px-2.5 text-sm rounded-md  text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
													href="{{ route('code_docs', ['class' => $controller['name']]) }}" @if (str_contains($activeClass, $controller['name'])) style="color :rgb(59 130 246 / var(--tw-text-opacity));"  @endif>
													{{$controller['shortName']}}
												</a>
											</li>
                                            @endforeach
										</ul>
									</div>

									</li>


									<li class="hs-accordion @if (str_contains($activeClass, 'Models')) active	@endif">

									<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
										href="javascript:;">
										{{-- <svg width="16" height="16" viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M1.5 0A1.5 1.5 0 000 1.5v5A1.5 1.5 0 001.5 8h5A1.5 1.5 0 008 6.5v-5A1.5 1.5 0 006.5 0h-5zM13.293 7.707a1 1 0 101.414-1.414L13.414 5H17.5a.5.5 0 01.5.5V9a1 1 0 102 0V5.5A2.5 2.5 0 0017.5 3h-4.086l1.293-1.293A1 1 0 0013.293.293l-3 3a1 1 0 000 1.414l3 3zM6.707 12.293a1 1 0 00-1.414 1.414L6.586 15H2.5a.5.5 0 01-.5-.5V11a1 1 0 10-2 0v3.5A2.5 2.5 0 002.5 17h4.086l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414l-3-3zM20 18.5a1.5 1.5 0 01-1.5 1.5h-5a1.5 1.5 0 01-1.5-1.5v-5a1.5 1.5 0 011.5-1.5h5a1.5 1.5 0 011.5 1.5v5z"
												fill="currentColor" />
										</svg> --}}
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
										 <path d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" fill="currentColor"/>
										</svg>
										Models

										<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
											width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
												stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</a>

									<div
										class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!str_contains($activeClass, 'Models')) hidden @endif"  @if (str_contains($activeClass, 'Models'))
										style="display:block;"
										@endif >
										<ul class="pl-2">
                                            @foreach ($models as $model)
											<li>
												<a class="flex items-center menu-bar gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
													href="{{ route('code_docs', ['class' => $model['name']]) }}" @if (str_contains($activeClass, $model['name'])) style="color :rgb(59 130 246 / var(--tw-text-opacity));"  @endif>
													{{$model['shortName']}}
												</a>
											</li>
                                            @endforeach
										</ul>
									</div>
								</li>

								<li class="hs-accordion @if (str_contains($activeClass, 'Repositories')) active	@endif">

                                    <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
										href="javascript:;">
										{{-- <svg width="16" height="16" viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M1.5 0A1.5 1.5 0 000 1.5v5A1.5 1.5 0 001.5 8h5A1.5 1.5 0 008 6.5v-5A1.5 1.5 0 006.5 0h-5zM13.293 7.707a1 1 0 101.414-1.414L13.414 5H17.5a.5.5 0 01.5.5V9a1 1 0 102 0V5.5A2.5 2.5 0 0017.5 3h-4.086l1.293-1.293A1 1 0 0013.293.293l-3 3a1 1 0 000 1.414l3 3zM6.707 12.293a1 1 0 00-1.414 1.414L6.586 15H2.5a.5.5 0 01-.5-.5V11a1 1 0 10-2 0v3.5A2.5 2.5 0 002.5 17h4.086l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414l-3-3zM20 18.5a1.5 1.5 0 01-1.5 1.5h-5a1.5 1.5 0 01-1.5-1.5v-5a1.5 1.5 0 011.5-1.5h5a1.5 1.5 0 011.5 1.5v5z"
												fill="currentColor" />
										</svg> --}}
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 576 512">
											<path d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z" fill="currentColor"/>
										</svg>
										Repositories

										<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
											width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
												stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</a>
									<div
										class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!str_contains($activeClass, 'Repositories')) hidden @endif"  @if (str_contains($activeClass, 'Repositories'))
										style="display:block;"
										@endif>
										<ul class="pl-2">
                                            @foreach ($repositories as $key=> $repository)

											<li>
												<a class="flex items-center menu-bar gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
													href="{{ route('code_docs', ['class' => $repository['name']]) }}" @if (str_contains($activeClass, $repository['name'])) style="color :rgb(59 130 246 / var(--tw-text-opacity));"  @endif>
													{{$repository['shortName']}}
												</a>
											</li>
                                            @endforeach
										</ul>
									</div>

								</li>
								
									<li class="hs-accordion @if (str_contains($activeClass, 'Services')) active	@endif">

										<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
											href="javascript:;">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 496 512">
												<path d="M88 216c81.7 10.2 273.7 102.3 304 232H0c99.5-8.1 184.5-137 88-232zm32-152c32.3 35.6 47.7 83.9 46.4 133.6C249.3 231.3 373.7 321.3 400 448h96C455.3 231.9 222.8 79.5 120 64z" fill="currentColor"/></svg>
											{{-- <svg width="16" height="16" viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M1.5 0A1.5 1.5 0 000 1.5v5A1.5 1.5 0 001.5 8h5A1.5 1.5 0 008 6.5v-5A1.5 1.5 0 006.5 0h-5zM13.293 7.707a1 1 0 101.414-1.414L13.414 5H17.5a.5.5 0 01.5.5V9a1 1 0 102 0V5.5A2.5 2.5 0 0017.5 3h-4.086l1.293-1.293A1 1 0 0013.293.293l-3 3a1 1 0 000 1.414l3 3zM6.707 12.293a1 1 0 00-1.414 1.414L6.586 15H2.5a.5.5 0 01-.5-.5V11a1 1 0 10-2 0v3.5A2.5 2.5 0 002.5 17h4.086l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414l-3-3zM20 18.5a1.5 1.5 0 01-1.5 1.5h-5a1.5 1.5 0 01-1.5-1.5v-5a1.5 1.5 0 011.5-1.5h5a1.5 1.5 0 011.5 1.5v5z"
													fill="currentColor" />
											</svg> --}}
											Services

											<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
												width="16" height="16" viewBox="0 0 16 16" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
													stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
											</svg>
										</a>
										<div
											class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!str_contains($activeClass, 'Services')) hidden @endif"  @if (str_contains($activeClass, 'Services'))
											style="display:block;"
											@endif>
											<ul class="pl-2">
												@foreach ($services as $key=> $service)
												<li>
													<a class="flex items-center menu-bar gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
														href="{{ route('code_docs', ['class' => $service['name']]) }}" @if (str_contains($activeClass, $service['name'])) style="color :rgb(59 130 246 / var(--tw-text-opacity));"  @endif>
														{{$service['shortName']}}
													</a>
												</li>
												@endforeach
											</ul>
										</div>
									</li>
								
								<li class="hs-accordion @if (str_contains($activeClass, 'Providers')) active	@endif">

									<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
										href="javascript:;">
										{{-- <svg width="16" height="16" viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M1.5 0A1.5 1.5 0 000 1.5v5A1.5 1.5 0 001.5 8h5A1.5 1.5 0 008 6.5v-5A1.5 1.5 0 006.5 0h-5zM13.293 7.707a1 1 0 101.414-1.414L13.414 5H17.5a.5.5 0 01.5.5V9a1 1 0 102 0V5.5A2.5 2.5 0 0017.5 3h-4.086l1.293-1.293A1 1 0 0013.293.293l-3 3a1 1 0 000 1.414l3 3zM6.707 12.293a1 1 0 00-1.414 1.414L6.586 15H2.5a.5.5 0 01-.5-.5V11a1 1 0 10-2 0v3.5A2.5 2.5 0 002.5 17h4.086l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414l-3-3zM20 18.5a1.5 1.5 0 01-1.5 1.5h-5a1.5 1.5 0 01-1.5-1.5v-5a1.5 1.5 0 011.5-1.5h5a1.5 1.5 0 011.5 1.5v5z"
												fill="currentColor" />
										</svg> --}}
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
										<path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm161.5-86.1c-12.2-5.2-26.3 .4-31.5 12.6s.4 26.3 12.6 31.5l11.9 5.1c17.3 7.4 35.2 12.9 53.6 16.3v50.1c0 4.3-.7 8.6-2.1 12.6l-28.7 86.1c-4.2 12.6 2.6 26.2 15.2 30.4s26.2-2.6 30.4-15.2l24.4-73.2c1.3-3.8 4.8-6.4 8.8-6.4s7.6 2.6 8.8 6.4l24.4 73.2c4.2 12.6 17.8 19.4 30.4 15.2s19.4-17.8 15.2-30.4l-28.7-86.1c-1.4-4.1-2.1-8.3-2.1-12.6V235.5c18.4-3.5 36.3-8.9 53.6-16.3l11.9-5.1c12.2-5.2 17.8-19.3 12.6-31.5s-19.3-17.8-31.5-12.6L338.7 175c-26.1 11.2-54.2 17-82.7 17s-56.5-5.8-82.7-17l-11.9-5.1zM256 160a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" fill="currentColor"/>
									   </svg>
										Providers

										<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
											width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
												stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</a>
									<div
										class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!str_contains($activeClass, 'Providers')) hidden @endif"  @if (str_contains($activeClass, 'Providers'))
										style="display:block;"
										@endif>
										<ul class="pl-2">
											@foreach ($providers as $key=> $provider)
											<li>
												<a class="flex items-center menu-bar gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
													href="{{ route('code_docs', ['class' => $provider['name']]) }}" @if (str_contains($activeClass, $provider['name'])) style="color :rgb(59 130 246 / var(--tw-text-opacity));"  @endif>
													{{$provider['shortName']}}
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</li>


								<li class="hs-accordion @if (str_contains($activeClass, 'Helpers')) active	@endif">

									<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
										href="javascript:;">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
											<path d="M443.1 0H71.9C67.9 37.3 37.4 67.8 0 71.7v371.5c37.4 4.9 66 32.4 71.9 68.8h372.2c3-36.4 32.5-65.8 67.9-69.8V71.7c-36.4-5.9-65-35.3-68.9-71.7zm-37 404.9c-36.3 0-18.8-2-55.1-2-35.8 0-21 2-56.1 2-5.9 0-4.9-8.2 0-9.8 22.8-7.6 22.9-10.2 24.6-12.8 10.4-15.6 5.9-83 5.9-113 0-5.3-6.4-12.8-13.8-12.8H200.4c-7.4 0-13.8 7.5-13.8 12.8 0 30-4.5 97.4 5.9 113 1.7 2.5 1.8 5.2 24.6 12.8 4.9 1.6 6 9.8 0 9.8-35.1 0-20.3-2-56.1-2-36.3 0-18.8 2-55.1 2-7.9 0-5.8-10.8 0-10.8 10.2-3.4 13.5-3.5 21.7-13.8 7.7-12.9 7.9-44.4 7.9-127.8V151.3c0-22.2-12.2-28.3-28.6-32.4-8.8-2.2-4-11.8 1-11.8 36.5 0 20.6 2 57.1 2 32.7 0 16.5-2 49.2-2 3.3 0 8.5 8.3 1 10.8-4.9 1.6-27.6 3.7-27.6 39.3 0 45.6-.2 55.8 1 68.8 0 1.3 2.3 12.8 12.8 12.8h109.2c10.5 0 12.8-11.5 12.8-12.8 1.2-13 1-23.2 1-68.8 0-35.6-22.7-37.7-27.6-39.3-7.5-2.5-2.3-10.8 1-10.8 32.7 0 16.5 2 49.2 2 36.5 0 20.6-2 57.1-2 4.9 0 9.9 9.6 1 11.8-16.4 4.1-28.6 10.3-28.6 32.4v101.2c0 83.4.1 114.9 7.9 127.8 8.2 10.2 11.4 10.4 21.7 13.8 5.8 0 7.8 10.8 0 10.8z" fill="currentColor"/>
										</svg>
										{{-- <svg width="16" height="16" viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M1.5 0A1.5 1.5 0 000 1.5v5A1.5 1.5 0 001.5 8h5A1.5 1.5 0 008 6.5v-5A1.5 1.5 0 006.5 0h-5zM13.293 7.707a1 1 0 101.414-1.414L13.414 5H17.5a.5.5 0 01.5.5V9a1 1 0 102 0V5.5A2.5 2.5 0 0017.5 3h-4.086l1.293-1.293A1 1 0 0013.293.293l-3 3a1 1 0 000 1.414l3 3zM6.707 12.293a1 1 0 00-1.414 1.414L6.586 15H2.5a.5.5 0 01-.5-.5V11a1 1 0 10-2 0v3.5A2.5 2.5 0 002.5 17h4.086l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414l-3-3zM20 18.5a1.5 1.5 0 01-1.5 1.5h-5a1.5 1.5 0 01-1.5-1.5v-5a1.5 1.5 0 011.5-1.5h5a1.5 1.5 0 011.5 1.5v5z"
												fill="currentColor" />
										</svg> --}}
										Helpers

										<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
											width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
												stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</a>
									<div
										class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!str_contains($activeClass, 'Helpers')) hidden @endif"  @if (str_contains($activeClass, 'Helpers'))
										style="display:block;"
										@endif>
										<ul class="pl-2">
											@foreach ($helpers as $key=> $helper)
											<li>
												<a class="flex items-center menu-bar gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
													href="{{ route('code_docs', ['class' => $helper['name']]) }}" @if (str_contains($activeClass, $helper['name'])) style="color :rgb(59 130 246 / var(--tw-text-opacity));"  @endif>
													{{$helper['shortName']}}
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</li>
								<li class="hs-accordion @if (str_contains($activeClass, 'Traits')) active	@endif">

									<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
										href="javascript:;">
										<svg width="16" height="16" viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M1.5 0A1.5 1.5 0 000 1.5v5A1.5 1.5 0 001.5 8h5A1.5 1.5 0 008 6.5v-5A1.5 1.5 0 006.5 0h-5zM13.293 7.707a1 1 0 101.414-1.414L13.414 5H17.5a.5.5 0 01.5.5V9a1 1 0 102 0V5.5A2.5 2.5 0 0017.5 3h-4.086l1.293-1.293A1 1 0 0013.293.293l-3 3a1 1 0 000 1.414l3 3zM6.707 12.293a1 1 0 00-1.414 1.414L6.586 15H2.5a.5.5 0 01-.5-.5V11a1 1 0 10-2 0v3.5A2.5 2.5 0 002.5 17h4.086l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414l-3-3zM20 18.5a1.5 1.5 0 01-1.5 1.5h-5a1.5 1.5 0 01-1.5-1.5v-5a1.5 1.5 0 011.5-1.5h5a1.5 1.5 0 011.5 1.5v5z"
												fill="currentColor" />
										</svg>
										Traits

										<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
											width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
												stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</a>
									<div
										class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!str_contains($activeClass, 'Traits')) hidden @endif"  @if (str_contains($activeClass, 'Traits'))
										style="display:block;"
										@endif>
										<ul class="pl-2">
											@foreach ($traits as $key=> $trait)
											<li>
												<a class="flex items-center menu-bar gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
													href="{{ route('code_docs', ['class' => $trait['name']]) }}" @if (str_contains($activeClass, $trait['name'])) style="color :rgb(59 130 246 / var(--tw-text-opacity));"  @endif>
													{{$trait['shortName']}}
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</li>


								</li>


								{{-- <li class="hs-accordion">
									<span
										class="py-2 text-sm block font-medium text-slate-500 dark:text-slate-300">AuthenticationModule</span>
									<a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hs-active:text-blue-500 hover:bg-gray-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hs-active:text-white"
										href="javascript:;">
										<svg width="16" height="16" viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 14.414V19a1 1 0 0 1-2 0v-4.586l-1.293 1.293a1 1 0 0 1-1.414-1.414l3-3a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L11 14.414Zm2.707-8.707-3 3a1 1 0 0 1-1.414 0l-3-3a.997.997 0 0 1 .324-1.631.999.999 0 0 1 1.09.217L9 5.586V1a1 1 0 0 1 2 0v4.586l1.293-1.293a1 1 0 1 1 1.414 1.414ZM18 8h-4l2-2h2.5A1.5 1.5 0 0 1 20 7.5v5a1.5 1.5 0 0 1-1.5 1.5H16l-2-2h4V8ZM4 14l2-2H2V8h4L4 6H1.5A1.5 1.5 0 0 0 0 7.5v5A1.5 1.5 0 0 0 1.5 14H4Z"
												fill="currentColor" />
										</svg>
										Injectables

										<svg class="arrow-icon ml-auto block w-3 h-3 group-hover:text-gray-500 dark:text-gray-400 transition-all"
											width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
												stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</a>

									<div
										class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
										<ul class="pl-2">
											<li>
												<a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-md text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400"
													href="javascript:;">
													Injectables
												</a>
											</li>
										</ul>
									</div>
								</li> --}}
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<div class="w-full p-6">
			<h1 class="text-2xl dark:text-white mb-4">
				{{$breadcrumb}}
			</h1>
			<div class="tab-main">
				<nav class="flex" aria-label="Tabs" role="tablist">
					<button type="button"
						class="py-2 px-5 text-slate-700 outline-0 inline-flex items-center border-b-[3px] border-transparent text-base font-medium whitespace-nowrap active dark:text-slate-400"
						id="info-tab" data-hs-tab="#info" aria-controls="info" role="tab">
						Info
					</button>
					<button type="button"
						class="py-2 px-5 text-slate-700 outline-0 inline-flex items-center border-b-[3px] border-transparent text-base font-medium whitespace-nowrap dark:text-slate-400"
						id="source-tab" data-hs-tab="#source" aria-controls="source" role="tab">
						Source
					</button>
				</nav>
				<div class="bg-white dark:bg-slate-800 p-4">
					<div id="info" role="tabpanel" aria-labelledby="info-tab">
						<div class="mb-5">
							<h2 class="text-xl font-bold mb-1 dark:text-white">File</h2>
							<p class="text-red-500 dark:text-red-400">{{$activeClass}}</p>
						</div>
						<div class="mb-5">
							<h2 class="text-xl font-bold mb-2 dark:text-white">Methods</h2>
							<div class="border border-gray-300 dark:border-slate-600">
                                @foreach($methods as $key => $method)
								<div class="accordion-item animated slideInRight">
									<p class="accordion-header text-lg text-blue-400 px-4 py-2 border-t-[1px] border-gray-300 dark:border-slate-600 dark:bg-slate-800">
										{{ $method['name'].'()' }}
									<span></span></p>
									<div class="accordion-body bg-slate-100 dark:bg-slate-700 p-4 dark:text-white border">
										<code>
											{!! getMethodCode($activeClass, $method['name'])  !!}
										</code>
									</div>
								</div>
                                @endforeach
							</div>
						</div>
					</div>
					<div id="source" class="hidden" role="tabpanel" aria-labelledby="source-tab">
						<div class="bg-slate-100 dark:bg-slate-700 p-4 rounded">
								<pre>{{$sourceCode}}</pre>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@preline/preline@1.0.0/dist/hs-ui.bundle.min.js"></script>
	<script>
		const HSThemeAppearance = {
			init() {
				const defaultTheme = 'light'
				let theme = localStorage.getItem('hs_theme') || defaultTheme

				if (document.querySelector('html').classList.contains('dark')) return
				this.setAppearance(theme)
			},
			_resetStylesOnLoad() {
				const $resetStyles = document.createElement('style')
				$resetStyles.innerText = `*{transition: unset !important;}`
				$resetStyles.setAttribute('data-hs-appearance-onload-styles', '')
				document.head.appendChild($resetStyles)
				return $resetStyles
			},
			setAppearance(theme, saveInStore = true, dispatchEvent = true) {
				const $resetStylesEl = this._resetStylesOnLoad()

				if (saveInStore) {
					localStorage.setItem('hs_theme', theme)
				}

				document.querySelector('html').classList.remove('dark')
				document.querySelector('html').classList.remove('light')

				document.querySelector('html').classList.add(this.getOriginalAppearance())

				setTimeout(() => {
					$resetStylesEl.remove()
				})

				if (dispatchEvent) {
					window.dispatchEvent(new CustomEvent('on-hs-appearance-change', { detail: theme }))
				}
			},

			getOriginalAppearance() {
				const defaultTheme = 'light'
				return localStorage.getItem('hs_theme') || defaultTheme
			}
		}
		HSThemeAppearance.init()

		window.addEventListener('load', () => {
			const $clickableThemes = document.querySelectorAll('[data-hs-theme-click-value]')
			const $switchableThemes = document.querySelectorAll('[data-hs-theme-switch]')

			$clickableThemes.forEach($item => {
				$item.addEventListener('click', () => HSThemeAppearance.setAppearance($item.getAttribute('data-hs-theme-click-value'), true, $item))
			})

			$switchableThemes.forEach($item => {
				$item.addEventListener('change', (e) => {
					HSThemeAppearance.setAppearance(e.target.checked ? 'dark' : 'light')
				})

				$item.checked = HSThemeAppearance.getAppearance() === 'dark'
			})

			window.addEventListener('on-hs-appearance-change', e => {
				$switchableThemes.forEach($item => {
					$item.checked = e.detail === 'dark'
				})
			})
		})


$(document).ready(function() {
  $('#menu-search').on('input', function() {
    var searchQuery = $(this).val().toLowerCase();

    // Hide all menu items initially
    $('#accordion-toggle-data li').hide();

    // Show matching items and their parent menus
    $('#accordion-toggle-data li').each(function() {
      var menuItemText = $(this).text().toLowerCase();
	  console.log($(this).find('div'));
      var hasMatchingSubItem = $(this).find('li').filter(function() {
        return $(this).text().toLowerCase().indexOf(searchQuery) > -1;
      }).length > 0;
	  console.log(menuItemText.indexOf(searchQuery));
      if (menuItemText.indexOf(searchQuery) > -1 || hasMatchingSubItem) {
		$('#module').addClass('active');
		$("#moduleSecltion").css({ 'height' : '', 'display' : 'block' });
		$(this).find('div').css({ 'height' : '', 'display' : 'block' });
        $(this).parents('li').show();
        $(this).show();
      }
	  if(menuItemText.indexOf(searchQuery) == 0){
		$("#moduleSecltion").css({ 'height' : '0px'})
	  }
    });
  });
});
$(".accordion-header").click(function() {
    if (
      $(this)
      .next()
      .is(":visible")
    ) {
      $(this)
        .next()
        .slideUp();
      $(this)
        .parent()
        .addClass("accordion-close");
      $(this)
        .parent()
        .removeClass("accordion-open");
    } else {
      $(".accordion-body").slideUp();
      $(".accordion-item").removeClass("accordion-open");
      $(this)
        .next()
        .slideDown();
      $(this)
        .parent()
        .addClass("accordion-open");
      $(this)
        .parent()
        .removeClass("accordion-close");
    }
  });
</script>

</body>
<!-- END BODY -->

</html>