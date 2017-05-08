var ytURL = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCKHBJ-C1ZVYKtIyY01Uzf6g&key=AIzaSyCKEb2K3Qaz7ydIa4gxy4LI8k2PbxoifZ4"

function getVideos(){
  jQuery.ajax({
    url: ytURL,
    type: 'GET',
    success: function(result){
      console.log(result);
    }
  })
}
