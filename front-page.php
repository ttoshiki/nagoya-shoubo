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
 * @package nagoya-shoubo
 */

get_header();
?>

<div id="front_page" class="content-area">
	<main id="main" class="site-main">
		<section id="front_top">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/front-page_main.jpg" srcset="<?php bloginfo('template_directory'); ?>/img/front-page/front-page_main@2x.jpg" alt="名古屋消防" class="front_top-frontimg">
			<div class="first-campaign">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/first_campaign.png" alt="初回限定特典">
				<span>他社様<span class="small">の</span>見積書<br class="md-br">ご提示<span class="small">で</span>値引き対応！</span>
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
			<div class="about_nagoyashoubo">
				"名古屋消防設備"<span class="small_about">とは</span>
			</div>
			<div class="service_map_wrapper">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/service_map.png" srcset="<?php bloginfo('template_directory'); ?>/img/front-page/service_map@2x.png" alt="愛知県名古屋市を中心にサービスを展開" class="service_map">
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/triangle.png" class="triangle">
		</section>
		<section id="front_legal" class="sec_container">
			<h1 class="front_legalHeading">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_caution.png">
				<span>建物の所有者や管理者は、次の法律や規則にもとづいて、<br />防火設備の設置や点検を行わなくてはなりません。</span>
			</h1>
			<ul class="front_legalList">
				<li class="front_legalItem">
					<h2 class="front_legalSubHeading">・消防法</h2>
					<p class="front_legalParagraph">防火についての根本をあらわした法律（国会が制定する命令）です。消防機関の権限、消防設備等の設置義務・更改義務、建物の規制内容などの、基本的な事項が定められています。</p>
				</li>
				<li class="front_legalItem">
					<h2 class="front_legalSubHeading">・消防法施行令</h2>
					<p class="front_legalParagraph">消防法を施行するための政令（内閣によって制定された命令）です。消防用設備が満たすべき技術的基準、救急業務、消防設備の検査などについての規則が定められています。</p>
				</li>
				<li class="front_legalItem">
					<h2 class="front_legalSubHeading">・火災予防条例</h2>
					<p class="front_legalParagraph">国による法律や政令の他、各市町村が火災予防条例を制定して、防火を推進しています。<br />
					条例では、消防法の委任を受けた事柄に加えて、地方の事情により必要とされる事柄、自主的に安全性向上のため規制すべき事柄などが定められています</p>
				</li>
				<li class="front_legalItem">
					<h2 class="front_legalSubHeading">・建築基準法に基づく定期報告制度</h2>
					<p class="front_legalParagraph">建築物・建築設備・防火設備・昇降機等について、定期的に専門の技術者に調査・検査をさせ、 その結果を特定行政庁に報告させることを、建築物の所有者等に義務付けられています。</p>
				</li>
			</ul>
		</section>
		<section id="front_3point" class="sec_container">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/three_points.png" alt="名古屋消防設備が選ばれている3つのポイント">
			<!-- point 1 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_1.png" alt="消防・防災に関するあらゆるお困りごとを解決">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/building.jpg" alt="" class="front_3pointBuildingImg">
			<div class="sec_inner_container mt-0 pt-2 sec_inner_bgwhite">
				<div class="const_example_box">
					<div class="const_example_box_header">
						<span>工事・点検対象</span>
					</div>
					<div class="d-flex flex-wrap justify-content-center">
						<ul class="const_example_list">
							<li class="const_example_item">ビル<br />マンション</li>
							<li class="const_example_item">工　場</li>
							<li class="const_example_item">店　舗</li>
							<li class="const_example_item">介護施設</li>
							<li class="const_example_item">ホテル<br />民泊施設</li>
							<li class="const_example_item">学校</li>
							<li class="const_example_item">オフィス</li>
						</ul>
						<div class="const_example_text col-12 col-md-8">
							<div class="cet_2">施工実績</div>
							<ul class="cet_3">
								<li class="highlight">・法定消防点検</li>
								<li class="highlight">・消防設備設置工事</li>
								<li class="highlight">・避難灯／誘導灯工事</li>
								<li class="highlight">・連結送水管試験／改修</li>
								<li class="highlight">・スプリンクラー新設／移設</li>
							</ul>
							<p>他、消防設備に関係するものはご相談ください<br />上記以外の内容にも、熟練の職人が対応致します</p>
						</div>
					</div>
				</div>
			</div>
			<!-- point 2 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_2.png" alt="安心の料金設計！">
			<div class="sec_inner_container sec_inner_bgwhite sec_price">
				<p class="pt-3 font-weight-bold">明確な料金設定で、工事費用が気になる方にも<br class="md-br">安心してご利用頂いております。</p>
				<div class="p2_tri_outer">
					<div class="point2_triangle"></div>
				</div>
				<img class="price_list" src="<?php bloginfo('template_directory'); ?>/img/front-page/price_list.jpg" alt="価格表">
			</div>
			<!-- point 3 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_3.png" alt="ジャンルが違っても一括受注が可能！">
			<div class="sec_inner_container sec_inner_bgwhite">
				<p class="pt-3 point3_text">
					自社にて<br>
					<span class="point3_dark">□電気工事部門</span>&nbsp;&nbsp;<br class="md-br">
					<span class="point3_light">□空調工事部門</span>&nbsp;&nbsp;<br class="md-br">
					<span class="point3_dark">□防犯カメラ部門</span><br>
					を有しており、一括受注が可能です。<br>
					その他、多数実績による蓄積された経験で、<br class="md-br">小さな "困った" にも対応致します。
				</p>
				<div class="row genre_imgs">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_electric.jpg" alt="名古屋電気工事">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_aircon.jpg" alt="名古屋空調工事">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_security.jpg" alt="防犯カメラセキュリティ">
					<img class="col-8 col-md-6" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_camera.jpg" alt="無料防犯カメラ">
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
		<!-- お問い合わせはこちら 見積無料 -->
		<?php get_template_part('contactform-link'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
