/**

 * @copyright	(c) luft co.,ltd.

 * @link

 * @date

 * @project

 * @required

 * @author

 */

/* ======================================

 * Main

 * ====================================== */

var Main = {};



(function(){



	Main = function()

	{

		Main.prototype.RESIZE = 'main_resize';

		Main.prototype.SCROLL = 'main_scroll';



		// Stage Propaty

		Main.prototype.STAGE_WIDTH = null;

		Main.prototype.STAGE_HEIGHT = null;



		// Directory

		Main.prototype.SceneModule = null;

		Main.prototype.directoryName = null;

		Main.prototype.directory = {

			ROOT:		'topPage'

		};



		Main.prototype.scrollNum = null;

		Main.prototype.scrollTop = null;

		Main.prototype.scrollFlag = false;



		this.$html = $('html');

		this.$body = $('body');

		this.$wrapper = $('#wrapper');

		this.$header = $('#header');



		// Initialize

		this.Init();

	};



	Main.prototype = {



		/**

		 * Init

		 */

		Init: function()

		{

			var that = this;



			$(window)

				.on('resize', that, that.ResizeHandler).trigger('resize')

				.on('scroll', that, that.ScrollHandler).trigger('scroll');



			// Setup

			that.Setup();

		},



		/**

		 * Setup

		 */

		Setup: function()

		{

			var that = this;



//ここで一番最初にディレクトリマネージャーを呼び出す

			that.DirectoryManager();

		}

	};





	/**

	 * Directory Manager

	 */

	Main.prototype.DirectoryManager = function()

	{

		var that = this;



		Main.prototype.directoryName = that.$wrapper.attr('class');



//以下文がswitchではなく、ifになっていれば、wrapperにクラスが2つ入っても大丈夫

		if(that.$wrapper.hasClass(that.directory.ROOT))

		{

			that.SceneModule = new SceneTopPage(this, that.$wrapper);

		}



	};





	/**

	 * Resize Event Handler

	 * @param e {Event}

	 */

	Main.prototype.ResizeHandler = function(e)

	{

		var that = e?e.data:this;

		if(!that) return;



		// [GET] Stage Property

		Main.prototype.STAGE_WIDTH = util.getBrowser.width();

		Main.prototype.STAGE_HEIGHT = util.getBrowser.height();



		$(window).trigger(Main.prototype.RESIZE);

	};



	/**

	 * Scroll Event Handler

	 * @param e {Event}

	 */

	Main.prototype.ScrollHandler = function(e)

	{

		var that = e?e.data:this;

		if(!that) return;



		Main.prototype.scrollTop = $(window).scrollTop();



		if(30 < Main.prototype.scrollTop){

			that.$header.addClass('fixed');

		} else {

			that.$header.removeClass('fixed');

		}



		$(window).trigger(Main.prototype.SCROLL);

	};



	/**

	 * onLoad

	 */

	$(function()

	{

		//DefaultSetup

		$().DefaultSetup();



		/* -----------------------------

		 * Groval Navi Open

		 * ----------------------------- */

			var $gNav_btn = $("#gNav_btn");

			var $gNav_wrap = $("#gNav_wrap");

			var $contents_wrap = $("#contents_wrap");

			var _navClickFlg = false;



			$gNav_btn.on('click', gNavOpenfn);

			$contents_wrap.on('click', gNavOpenfn2);



			function gNavOpenfn()

			{

				if(!_navClickFlg)

				{

					$gNav_btn.addClass("open");

					$gNav_wrap.addClass("open");

					_navClickFlg = true;

				}

				else

				{

					$gNav_btn.removeClass("open");

					$gNav_wrap.removeClass("open");

					_navClickFlg = false;

				}

			}



			function gNavOpenfn2()

			{

				if(!_navClickFlg)

				{

					_navClickFlg = false;

				}

				else

				{

					$gNav_btn.removeClass("open");

					$gNav_wrap.removeClass("open");

					_navClickFlg = false;

				}

			}



		//Main　Call

		new Main();



	});



}).call(this);





/* ======================================

 * [Scene] ROOT / TOP

 * ====================================== */

/**

 * SceneTopPage

 */

var SceneTopPage = (function(parent,element)

{

	function SceneTopPage(parent,element)

	{

		var that = this;

		that.parent = parent;

		that.element = element;

		that.directoryName = that.parent.directoryName;



		// Initialize

		that.Init();

	}



	SceneTopPage.prototype = {

		/**

		 * Init

		 */

		Init: function()

		{

			var that = this;



			// Setup

			that.Setup();

		},

		/**

		 * Setup

		 */

		Setup: function()

		{

			var that = this;

		}

	};



	return SceneTopPage;



})();

