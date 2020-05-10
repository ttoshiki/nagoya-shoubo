<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nagoya-denki
 */

get_header();
?>

<div id="front_page" class="content-area">
	<main id="main" class="site-main">
		<section id="front_top">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/front-page_main.png" alt="名古屋電気工事">
			<div class="first-campaign">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/first_campaign.png" alt="初回限定特典">
				<span>他社様<span class="small">の</span>見積書<br class="md-br"><span class="small">ご</span>提示<span class="small">で</span>値引き対応！</span>
			</div>
		</section>
		<!-- お問い合わせはこちら 見積無料 -->
		<?php get_template_part('contactform-link'); ?>
		<section id="front_news" class="sec_container">
			<div class="front_news_box">
				<h1>最新情報</h1>
				<?php
				$news_query = new WP_Query(
					array(
						'post_type'      => 'post',
						'category_name' => 'news',
						'posts_per_page' => 5,
						'order' => 'DESC',
					)
				);
				?>
				<?php if ($news_query->have_posts()) : ?>
					<?php while ($news_query->have_posts()) : ?>
						<?php $news_query->the_post();
								$cat = get_the_category();
								$cat_name = $cat[0]->name; ?>
						<div class="news_list">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"></a>
							<div>
								<div class="d-flex flex-column flex-sm-row">
									<time class="mr-4" datetime="<?php the_time('Y-m-d') ?>"><?php echo get_the_date('Y 年 m 月 d 日'); ?></time>
									<div class="news_cat_name"><?php echo $cat_name; ?></div>
								</div>
							</div>
							<div class="news_title">
								<?php
										echo $post->post_title;
										// ----- 文字数制限をつけたい場合 -----
										// if (mb_strlen($post->post_title) > 40) {
										// 	$title = mb_substr($post->post_title, 0, 40);
										// 	echo $title . '...';
										// } else {
										// 	echo $post->post_title;
										//}
										?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<p>準備中です。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</section>
		<section id="front_about" class="sec_container">
			<div class="about_nagoyadenki">
				"名古屋電気工事"<span class="small_about">とは</span>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/service_map.png" alt="愛知県名古屋市を中心にサービスを展開">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/triangle.png">
		</section>
		<section id="front_3point" class="sec_container">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/three_points.png" alt="名古屋電気工事が選ばれている3つのポイント">
			<!-- point 1 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_1.png" alt="電気に関するあらゆるお困りごとを解決">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/five_building.png" alt="住宅・マンション・店舗・工場・施設">
			<div class="sec_inner_container mt-0 pt-2 sec_inner_bgwhite">
				<div class="const_example_box">
					<div class="const_example_box_header">
						<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_const_home.png" alt="住宅電気工事">
						<span>住宅電気工事</span>
					</div>
					<div class="d-flex flex-wrap justify-content-center">
						<div class="const_example_img_outer col-8 col-md-4">
							<img src="<?php bloginfo('template_directory'); ?>/img/front-page/const_example_home.png" alt="住宅電気工事の例">
						</div>
						<div class="const_example_text col-12 col-md-8">
							<div class="cet_1">
								住宅の新築・リフォームの電気工事を施工致します。<br>
								施工後のメンテナンスや各種トラブル対応等もお任せください。
							</div>
							<div class="cet_2">施工実績</div>
							<div class="cet_3">
								<span class="highlight">宅内配線</span>、<span class="highlight">換気工事</span>、<span class="highlight">オール電化工事アンテナ工事</span>、<span class="highlight">LAN工事</span>、<span class="highlight">太陽光工事</span>、<span class="highlight">エアコン取付</span>　等
							</div>
						</div>
					</div>
				</div>
				<div class="const_example_box">
					<div class="const_example_box_header">
						<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_const_shop.png" alt="店舗電気工事">
						<span>店舗電気工事</span>
					</div>
					<div class="d-flex flex-wrap justify-content-center">
						<div class="const_example_img_outer col-8 col-md-4">
							<img src="<?php bloginfo('template_directory'); ?>/img/front-page/const_example_shop.png" alt="店舗電気工事の例">
						</div>
						<div class="const_example_text col-12 col-md-8">
							<div class="cet_1">
								綿密な打ち合わせを実施し、お客様の使いやすさを第一に店舗施工致します。「もれ」「ぬけ」の無い徹底した工事施工を実現致します。
							</div>
							<div class="cet_2">施工実績</div>
							<div class="cet_3">
								<span class="highlight">電化厨房工事</span>、<span class="highlight">コンセント増設工事</span>、<span class="highlight">管理カメラ工事</span>、<span class="highlight">厨房内空調工事専用電源工事</span>、<span class="highlight">照明改修工事</span>
							</div>
						</div>
					</div>
				</div>
				<div class="const_example_box">
					<div class="const_example_box_header">
						<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_const_factory.png" alt="工場電気工事">
						<span>工場電気工事</span>
					</div>
					<div class="d-flex flex-wrap justify-content-center">
						<div class="const_example_img_outer col-8 col-md-4">
							<img src="<?php bloginfo('template_directory'); ?>/img/front-page/const_example_factory.png" alt="工場電気工事の例">
						</div>
						<div class="const_example_text col-12 col-md-8">
							<div class="cet_1">
								規模の大きな工場から設備の修繕まで、豊富な実績で対応致します。電源の増設や小さな案件でもまずご相談ください。
							</div>
							<div class="cet_2">施工実績</div>
							<div class="cet_3">
								<span class="highlight">L E D化工事</span>、<span class="highlight">電源改修工事</span>、<span class="highlight">照明工事</span>、<br>
								<span class="highlight">キュービクル廃止</span>・<span class="highlight">新設工事</span>、<span class="highlight">放送設備工事</span>
							</div>
						</div>
					</div>
				</div>
				<div class="const_example_box">
					<div class="const_example_box_header">
						<span>その他</span>
					</div>
					<div class="const_example_text">
						<div class="cet_3 text-center">
							<span class="highlight">賃貸マンション・貸ビル　電気トラブル駆付け対応</span><br>
							<span class="highlight">太陽光発電</span>、<span class="highlight">メンテナンス</span>、<span class="highlight">各種電気土木工事（電柱建柱等）</span>　他多数
						</div>
					</div>
				</div>
			</div>
			<!-- point 2 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_2.png" alt="安心の料金設計！">
			<div class="sec_inner_container sec_inner_bgwhite">
				<p class="pt-3 font-weight-bold">明確な料金設定で、工事費用が気になる方にも<br class="md-br">安心してご利用頂いております。</p>
				<div class="p2_tri_outer">
					<div class="point2_triangle"></div>
				</div>
				<img class="price_list" src="<?php bloginfo('template_directory'); ?>/img/front-page/price_list.png" alt="価格表">
			</div>
			<!-- point 3 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_3.png" alt="ジャンルが違っても一括受注が可能！">
			<div class="sec_inner_container sec_inner_bgwhite">
				<p class="pt-3 point3_text">
					自社にて<br>
					<span class="point3_blue1">□空調工事部門</span>&nbsp;&nbsp;<br class="md-br">
					<span class="point3_blue2">□消防工事部門</span>&nbsp;&nbsp;<br class="md-br">
					<span class="point3_blue1">□防犯カメラ部門</span><br>
					を有しており、一括受注が可能です。<br>
					その他、多数実績による蓄積された経験で、<br class="md-br">小さな "困った" にも対応致します。
				</p>
				<div class="row genre_imgs">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_aircon.png" alt="名古屋空調工事">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_firefight.png" alt="名古屋消防設備">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_security.png" alt="防犯カメラセキュリティ">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_camera.png" alt="無料防犯カメラ">
				</div>
			</div>
		</section>
		<!-- お問い合わせはこちら 見積無料 -->
		<?php get_template_part('contactform-link'); ?>
		<section id="front_result_and_voice" class="sec_container">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/construction_results.png" alt="名古屋空調工事">
			<div class="sec_inner_container sec_inner_bgblue">
				<div class="row align-items-center">
					<img class="col-4" src="<?php bloginfo('template_directory'); ?>/img/front-page/customer_message.png" alt="お客様の声">
					<span class="col-8 custom_voice">
						名古屋電気工事を<br class="md-br">利用してくださった<br>
						<span class="underline_blue">お客様の声</span>
					</span>
				</div>
				<div class="custom_voice_box">
					<div class="speechbaloon">
						すぐに漏電箇所の判断をしてもらい、<span class="underline_yellow">即日施工</span>していただき助かりました。
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_customer_1.png" alt="お客様">
				</div>
				<div class="custom_voice_box">
					<div class="speechbaloon">
						飲食店を経営していますが、専用電源や容量についても<span class="underline_yellow">細かく説明</span>してくれ、助かった。
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_customer_2.png" alt="お客様">
				</div>
				<div class="custom_voice_box">
					<div class="speechbaloon">
						ＥＶ電源を必要とした時に<span class="underline_yellow">親切、丁寧、希望通り</span>に施工していただきました。
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_customer_3.png" alt="お客様">
				</div>
			</div>
		</section>
		<section id="front_company" class="sec_container sec_inner_bgblue">
			<div class="company_box_header">
				名古屋電気工事／概要
			</div>
			<div class="company_box">
				<div class="company_1st_message">
					<div class="company_catchcopy">
						あなたと<br class="md-br">あなたの大切な人の<br class="md-br">明日を守る
					</div>
					<p>
						私たちの仕事は、電気工事事業、空調工事事業、セキュリティ事業、防災事業と多岐に渡ります。しかし、すべてに通ずる点はお客様の安心・快適を創る仕事だということです。私たちの技術で、お客様、そしてお客様が大切にされている全てを守れるよう、私たちセキュアスは全社一丸となって業務を邁進しています。
					</p>
				</div>
				<div class="company_box_main">
					<img class="photo_president" src="<?php bloginfo('template_directory'); ?>/img/front-page/photo_president.png" alt="会社代表近影">
					<div class="company_info_box">
						<span class="company_info_itemname">商号</span><br>
						株式会社セキュアス
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">本社所在地</span><br>
						〒455-0037　名古屋市港区名港一丁目8-9<br>
						丸二総合ビル2F
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">TEL</span>　０５２−３０４−７４１０<br>
						<span class="company_info_itemname">FAX</span>　０５２−３０４−７４１１
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">豊橋営業所</span><br>
						〒440-0011　豊橋市牛川通一丁目21-5
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">代表者</span>　代表取締役　石川和寛
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">事業内容</span>
						<ul class="ul_business_description">
							<li>電気工事事業（住宅、集合住宅、工場等　新築・改築電気設備工事）</li>
							<li>空調工事事業（家庭用・業務用エアコン販売、設置工事）</li>
							<li>セキュリティ事業（防犯カメラ、防犯設備機器販売、設置工事）</li>
							<li>家電修理メンテ事業（メーカー家電修理、エアコン洗浄メンテナンス）</li>
							<li>消防・防災事業（消防点検、防災設備機器販売、工事）</li>
							<li>ゼロカメラ事業（無料防犯カメラサービス“ゼロカメラ”事業運営本部）</li>
							<li>ＷＥＢシステム事業（集中監視システム等構築）</li>
						</ul>
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">従業員数</span><br>
						１５名　（パート、アルバイト含む）
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">取引銀行</span><br>
						愛知銀行　港支店／三菱東京ＵＦＪ銀行　名古屋港支店／名古屋銀行　港支店
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">取引先</span><br>
						パナソニック、東芝、ダイキン、三菱電機、アツミ電気<br>
						竹中エンジニアリング、ＮＳＳ、日本防犯システム、ヤマトプロテック　他　多数
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">保有資格</span><br>
						電気主任技術者、電気工事施工管理士、電気工事士、消防設備士、防犯設備士、管工事施工管理士、工事担任者、他
					</div>
				</div>
			</div>
		</section>
		<section id="front_flow" class="sec_container sec_inner_bgwhite">
			<div class="front_flow_header">
				ご利用の流れ
			</div>
			<div class="front_flow_box">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_flow_1.png">
				<div class="front_flow_box_text">
					まずは<br class="md-br">御社のご要望を<br>
					教えてください
				</div>
			</div>
			<div class="front_flow_triangle"></div>
			<div class="front_flow_box">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_flow_2.png">
				<div class="front_flow_box_text">
					御社に合わせた<br class="md-br">工事プランを<br>
					ご提案いたします
				</div>
			</div>
			<div class="front_flow_triangle"></div>
			<div class="front_flow_box">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_flow_3.png">
				<div class="front_flow_box_text">
					工事プランに<br>
					ご納得いただき<br class="md-br">契約成立
				</div>
			</div>
			<div class="front_flow_triangle"></div>
			<div class="front_flow_start">
				工事スタート
			</div>
			<img class="flow_engineer_illust" src="<?php bloginfo('template_directory'); ?>/img/front-page/flow_engineer_illust.png" alt="お任せ下さい">
		</section>
		<section id="front_question" class="sec_container">
			<div class="front_question_header">
				よくある<br class="md-br">ご質問
			</div>
			<div class="sec_inner_container sec_inner_bgbrown">
				<div class="qabox">
					<div class="qabox_inner qabox_q">
						器具（材料）は持っているので、工事だけでもお願いできますか？
					</div>
					<div class="qabox_inner qabox_a">
						お客様支給での施工も可能です！
					</div>
				</div>
				<div class="qabox">
					<div class="qabox_inner qabox_q">
						夜間や休日、緊急時でも対応してもらえますか？
					</div>
					<div class="qabox_inner qabox_a">
						対応可能です。まずはお気軽にお問合せ下さい。
					</div>
				</div>
				<div class="qabox">
					<div class="qabox_inner qabox_q">
						電気の容量変更の工事後の申請もお願いできますか？
					</div>
					<div class="qabox_inner qabox_a">
						登録工事店ですので、安心してお任せください！
					</div>
				</div>
			</div>
		</section>
		<section id="front_caution" class="sec_container sec_inner_container sec_inner_bgwhite">
			<img class="icon_caution" src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_caution.png">
			<h1>
				現在、弊社への問い合わせ・ご相談を数多く頂いております。
			</h1>
			<p>
				ご連絡いただいた順に対応させて頂くため、<br>
				場合によってはお待ちいただくこともございます。<br>
				そのため、具体的な案件をお持ちの方は相談だけでも構いませんので<br>
				早めにご連絡いただければと思います。<br>
			</p>
		</section>
		<!-- お問い合わせはこちら 見積無料 -->
		<?php get_template_part('contactform-link'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
