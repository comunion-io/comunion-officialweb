let lang = window.appconf.lang

if (lang == '') lang = 'en';

export default {
  fbxs: [
    { id: '2015', src: '/data/fbx/2015.fbx', datatype: 'fbx' },
    { id: 'brain', src: '/data/fbx/brain.fbx', datatype: 'fbx' },
    { id: 'earth', src: '/data/fbx/earth.fbx', datatype: 'fbx' },
    { id: 'cube', src: '/data/fbx/cube.fbx', datatype: 'fbx' }
  ],

  locale: [
    {
      id: 'locale',
      // src: "https://www.igoodi.eu/cms/ws/local.php?lang=" + lang,
      src: '/data/locale.json?lang=' + lang,
      datatype: 'json'
    }
    // { id: 'locale', src: 'json/locale.json?lang=' + lang, datatype: 'json' }
  ],

  json: [
    {
      id: 'projects',
      // src: "https://www.igoodi.eu/cms/ws/projects.php?lang=" + lang,
      src: '/data/projects.json?lang=' + lang,
      datatype: 'json'
    }
    // { id: 'projects', src: 'json/projects.json?lang=' + lang, datatype: 'json' },

    // {
    //   id: 'partners',
    //   // src: "https://www.igoodi.eu/cms/ws/partners.php?lang=" + lang,
    //   src: '/data/partners.json?lang=' + lang,
    //   datatype: 'json'
    // }
    // { id: 'partners', src: 'json/partners.json?lang=' + lang, datatype: 'json' }
  ],

  assets: [
    { id: 'logo', src: '/data/img/logo.png', datatype: 'asset' },
    { id: 'logo2', src: '/data/img/logo2.png', datatype: 'asset' },
    { id: 'audio', src: '/data/img/audio.png', datatype: 'asset' },
    { id: 'audio2', src: '/data/img/audio2.png', datatype: 'asset' },
    { id: 'poster', src: '/data/img/poster.png', datatype: 'asset' },
    { id: 'fb_icon', src: '/data/img/fb-icon.png', datatype: 'assets' },
    { id: 'in_icon', src: '/data/img/in-icon.png', datatype: 'assets' },
    { id: 'yt_icon', src: '/data/img/yt-icon.png', datatype: 'assets' },
    { id: 'medium', src: '/data/img/medium.png', datatype: 'assets' },
    { id: 'twitter', src: '/data/img/twitter.png', datatype: 'assets' },
    { id: 'github', src: '/data/img/github.png', datatype: 'assets' },
    { id: 'alt_content', src: '/data/img/alt-content.png', datatype: 'asset' }
  ]
}
