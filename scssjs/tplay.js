

var options = {};

var player = videojs('player', options);

player.on(['loadstart', 'play', 'playing', 'firstplay', 'pause', 'ended', 'adplay', 'adplaying', 'adfirstplay', 'adpause', 'adended', 'contentplay', 'contentplaying', 'contentfirstplay', 'contentpause', 'contentended', 'contentupdate'], function(e) {
  console.warn('VIDEOJS player event: ',  e.type);
});

player.httpSourceSelector();

