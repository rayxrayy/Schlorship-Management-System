function geolocation(e) {
    $.ajax({
        url: "https://ipapi.co/json/",
        type: "GET",
        success: function(t) {
            console.log("My data: ", t),
            e = t.country_code,
            console.log("My location: ", e),
            "" == !e ? $("#mobilenum").intlTelInput("setCountry", t.country_code) : $("#mobilenum").intlTelInput("setCountry", "us")
        },
        error: function(e) {
            console.log("Request failed.  Returned status of", status),
            $("#mobilenum").intlTelInput("setCountry", "us")
        }
    })
}
function geolocation2() {
    "Nepal" == (new Date).toString().split("(")[1].split(" ")[0] ? $("#nav-ai").show() : $("#nav-ai").hide()
}
function objectifyForm(e) {
    for (var t = {}, n = 0; n < e.length; n++)
        t[e[n].name] = e[n].value;
    return t
}
function getParameterByName(e) {
    e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var t = new RegExp("[\\?&]" + e + "=([^&]*)").exec(location.search);
    return null === t ? "" : decodeURIComponent(t[1].replace(/\+/g, " "))
}
function getHashByName(e) {
    e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var t = new RegExp("[\\?&]" + e + "=([^&]*)").exec(location.hash);
    return null === t ? "" : decodeURIComponent(t[1].replace(/\+/g, " "))
}
function setCookieUTM() {
    var e = getParameterByName("utm_source")
      , t = getParameterByName("utm_medium")
      , n = getParameterByName("utm_campaign")
      , o = getParameterByName("utm_content");
    if (e.length || t.length || n.length || o.length)
        sessionStorage.clear(),
        e.length && sessionStorage.setItem("utm_source", e),
        t.length && sessionStorage.setItem("utm_medium", t),
        n.length && sessionStorage.setItem("utm_campaign", n),
        o.length && sessionStorage.setItem("utm_content", o);
    else if (location.hash.includes("utm_source")) {
        let e = getHashByName("utm_source")
          , t = getHashByName("utm_medium")
          , n = getHashByName("utm_campaign")
          , o = getHashByName("utm_content");
        sessionStorage.clear(),
        e.length && sessionStorage.setItem("utm_source", e),
        t.length && sessionStorage.setItem("utm_medium", t),
        n.length && sessionStorage.setItem("utm_campaign", n),
        o.length && sessionStorage.setItem("utm_content", o)
    } else
        location.origin,
        sessionStorage.getItem("utm_source") || (sessionStorage.clear(),
        sessionStorage.setItem("utm_source", referrer()),
        sessionStorage.setItem("utm_medium", "-"),
        sessionStorage.setItem("utm_campaign", "-"),
        sessionStorage.setItem("utm_content", "-"),
        $("input[name=source").val(referrer()),
        $("input[name=medium").val("-"),
        $("input[name=source").val("-"),
        $("input[name=content").val("-"),
        $("input[name=utmSource").val(referrer()),
        $("input[name=utmMedium").val("-"),
        $("input[name=utmCampaign").val("-"),
        $("input[name=utmContent").val("-"));
    $("input[name=source").val(sessionStorage.getItem("utm_source")),
    $("input[name=medium").val(sessionStorage.getItem("utm_medium")),
    $("input[name=campaign").val(sessionStorage.getItem("utm_campaign")),
    $("input[name=content").val(sessionStorage.getItem("utm_content")),
    $("input[name=utmSource").val(sessionStorage.getItem("utm_source")),
    $("input[name=utmMedium").val(sessionStorage.getItem("utm_medium")),
    $("input[name=utmCampaign").val(sessionStorage.getItem("utm_campaign")),
    $("input[name=utmContent").val(sessionStorage.getItem("utm_content"))
}
function referrer() {
    var e = document.referrer;
    return "" === e ? "Direct" : 0 === e.search("https?://(.*)google.([^/?]*)") ? "Google" : 0 === e.search("https?://(.*)bing.([^/?]*)") ? "Bing" : 0 === e.search("https?://(.*)yahoo.([^/?]*)") ? "Yahoo" : 0 === e.search("https?://(.*)facebook.([^/?]*)") ? "Facebook" : 0 === e.search("https?://(.*)twitter.([^/?]*)") ? "Twitter" : 0 === e.search("https?://(.*)linkedin.([^/?]*)") ? "Linkedin" : 0 === e.search("https?://(.*)instagram.([^/?]*)") ? "Instagram" : 0 === e.search("https?://(.*)youtube.([^/?]*)") ? "Youtube" : 0 === e.search("https?://(.*)reddit.([^/?]*)") ? "Reddit" : 0 === e.search("https?://(.*)quora.([^/?]*)") ? "Quora" : 0 === e.search("https?://(.*)glassdoor.([^/?]*)") ? "Glassdoor" : 0 === e.search("https?://(.*)github.([^/?]*)") ? "Github" : 0 === e.search("https?://(.*)medium.([^/?]*)") ? "Medium" : e
}
function ipLookUp(e) {
    $.ajax({
        url: "https://ipapi.co/json/",
        type: "GET",
        success: function(e) {
            "NP" === e.country_code ? $("#nav-ai").show() : $("#nav-ai").hide()
        },
        error: function(e) {
            console.log("Request failed.  Returned status of", status)
        }
    })
}
$(function() {
    $(document).scroll(function() {
        var e = $(".navbar")
          , t = $(".ai-fellowship--subMenu");
        e.toggleClass("scrolled", $(this).scrollTop() > e.height()),
        t.toggleClass("scrolled", $(this).scrollTop() > 700)
    }),
    $(window).scroll(function() {
        $(this).scrollTop() > 20 ? $("#toTopBtn").fadeIn() : $("#toTopBtn").fadeOut()
    }),
    $("#toTopBtn").click(function() {
        return $("html, body").animate({
            scrollTop: 0
        }, 1e3),
        !1
    }),
    setCookieUTM(),
    geolocation2()
});

var apiConnect="https://api-website-v2.fuse.ai/api/v2/";