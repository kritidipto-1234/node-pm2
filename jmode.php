//kriti
console.log("j.php mode ran",document.readyState)

try {
    var _vis_opt_heatmap = 0;
    _vwo_code.finishedNew = _vwo_code.finished;
    _vwo_code.finished = function() {
        return 0
    }
    ;
    window.VWO = window.VWO || [];
    window.VWO.data = window.VWO.data || {};
    if (!_vwo_code.finished() || _vis_opt_heatmap) {
        clearTimeout(_vwo_settings_timer);
        if (_vis_opt_heatmap && !document.getElementById('_vis_opt_path_hides')) {
            (function() {
                var a = document.createElement('style');
                a.setAttribute('id', '_vis_opt_path_hides');
                a.setAttribute('type', 'text/css');
                document.getElementsByTagName('head')[0].appendChild(a);
            }
            )()
        }
        var _vwo_acc_id = 640628
          , _vwo_exp_ids = []
          , _vwo_exp = {}
          , _vwo_cookieDomain = 'localhost';
        window._vwo_pc = {};
        ;_vwo_isNewPreview = 1;
        _vwo_exp_ids.push('47');
        _vwo_exp['47'] = {
            "type": "VISUAL_AB",
            "exclude_url": "",
            "version": 4,
            "ibe": 1,
            "isSpaRevertFeatureEnabled": false,
            "comb_n": {
                "1": "Control",
                "2": "Variation-1",
                "3": "Variation-2"
            },
            "url": "https:\/\/table-site.netlify.app\/",
            "sections": {
                "1": {
                    "path": "",
                    "variations": {
                        "1": "[]",
                        "2": "[{\"js\":\"<script type='text\\\/javascript'>;\\n\\\/*vwo_debug log(\\\"content\\\",\\\"head\\\"); vwo_debug*\\\/console.log(\\\"custom code\\\",document.readyState);debugger;<\\\/script>;\",\"xpath\":\"HEAD\"}]",
                        "3": "[{\"js\":\"<script type='text\\\/javascript'>;\\n\\\/*vwo_debug log(\\\"content\\\",\\\"head\\\"); vwo_debug*\\\/console.log(\\\"Here from custom js\\\",document.readyState);debugger;<\\\/script>;\",\"xpath\":\"HEAD\"},{\"js\":\"var el,ctx=vwo_$(x);\\n\\\/*vwo_debug log(\\\"content\\\",\\\"body > h3:nth-of-type(1)\\\"); vwo_debug*\\\/(el=vwo_$(\\\"body > h3:nth-of-type(1)\\\")).replaceWith(\\\"<h3 >Table outside divffdsg<\\\/h3>\\\"),el=vwo_$(\\\"body > h3:nth-of-type(1)\\\");\",\"xpath\":\"body > h3:nth-of-type(1)\"}]"
                    },
                    "segmentObj": {},
                    "variation_names": {
                        "1": "Control",
                        "2": "Variation-1",
                        "3": "Variation-2"
                    },
                    "segment": {
                        "1": 1,
                        "2": 1,
                        "3": 1
                    }
                }
            },
            "segment_code": "true",
            "goals": {
                "1": {
                    "type": "ENGAGEMENT",
                    "excludeUrl": "",
                    "urlRegex": "^.*$"
                }
            },
            "pc_traffic": 100,
            "globalCode": {
                "pre": "<script type='text\/javascript'>console.log(\"prejs\",document.readyState);debugger;<\/script>",
                "post": "<script type='text\/javascript'>console.log(\"postjs\",document.readyState);debugger;<\/script>"
            },
            "name": "Campaign 38",
            "ps": true,
            "muts": {
                "post": {
                    "refresh": true,
                    "enabled": true
                }
            },
            "combs": {
                "1": 0.333333,
                "2": 0.333333,
                "3": 0.333333
            },
            "varSegAllowed": false,
            "ss": null,
            "pgre": true,
            "ep": 1667221323000,
            "isEventMigrated": true,
            "manual": false,
            "multiple_domains": 0,
            "status": "RUNNING",
            "clickmap": 1,
            "urlRegex": "^https\\:\\\/\\\/table\\-site\\.netlify\\.app\\\/?(?:[\\?#].*)?$"
        };
        _vwo_exp['47'].third_party = {};
        _vwo_exp['47'].debug = {
            "l": 0,
            "app": "app",
            "t": 0,
            "ts": 1698919975065,
            "url": "https%3A%2F%2Ftable-site.netlify.app%2F",
            "td": 0,
            "iple": 0,
            "iho": 0,
            "pahi": null,
            "saber": null,
            "newQueryBox": null,
            "dataRegion": null,
            "matchType": null,
            "cn": "undefined",
            "s": 0,
            "d": 0,
            "v": "2",
            "tg": 0,
            "alh": 0
        };
        _vwo_exp['47'].previewHash = '00a810e3b00fad0deef55126ba30ae10';
        ;var commonWrapper = function(argument) {
            if (!argument) {
                argument = {
                    valuesGetter: function() {
                        return {}
                    },
                    valuesSetter: function() {},
                    verifyData: function() {
                        return {}
                    }
                }
            }
            var pollInterval = 100;
            var timeout = 5e3;
            return function() {
                var accountIntegrationSettings = {};
                var _interval = null;
                function waitForAnalyticsVariables() {
                    try {
                        accountIntegrationSettings = argument.valuesGetter()
                    } catch (error) {
                        accountIntegrationSettings = undefined
                    }
                    if (accountIntegrationSettings && argument.verifyData(accountIntegrationSettings)) {
                        argument.valuesSetter(accountIntegrationSettings);
                        return 1
                    }
                    return 0
                }
                var currentTime = 0;
                _interval = setInterval((function() {
                    currentTime = currentTime || performance.now();
                    var result = waitForAnalyticsVariables();
                    if (result || performance.now() - currentTime >= timeout) {
                        clearInterval(_interval)
                    }
                }
                ), pollInterval)
            }
        };
        var pushBasedCommonWrapper = function(argument) {
            if (!argument) {
                argument = {
                    integrationName: "",
                    getExperimentList: function() {},
                    accountSettings: function() {},
                    pushData: function() {}
                }
            }
            return function() {
                window.VWO = window.VWO || [];
                window.VWO.push(["onVariationApplied", function(data) {
                    if (!data)
                        return;
                    var expId = data[1]
                      , variationId = data[2]
                      , repeated = data[0]
                      , singleCall = 0
                      , debug = 0;
                    var experimentList = argument.getExperimentList();
                    if (typeof argument.accountSettings === "function") {
                        var accountSettings = argument.accountSettings();
                        if (accountSettings) {
                            singleCall = accountSettings["singleCall"];
                            debug = accountSettings["debug"]
                        }
                    }
                    if (singleCall && repeated === "vS") {
                        return
                    }
                    if (expId && variationId && ["VISUAL_AB", "VISUAL", "SPLIT_URL"].indexOf(_vwo_exp[expId].type) > -1) {
                        if (experimentList.indexOf(+expId) !== -1) {
                            var pollInterval = 100;
                            var currentTime = 0;
                            var timeout = 5e3;
                            var interval = setInterval((function() {
                                currentTime = currentTime || performance.now();
                                var toClearInterval = argument.pushData(expId, variationId);
                                if (debug && toClearInterval) {
                                    try {
                                        var vwo_account_id = window._vwo_acc_id;
                                        var vwo_uuid = VWO._ && VWO._.cookies && VWO._.cookies.get("_vwo_uuid");
                                        var format = argument["integrationName"];
                                        if (window.VWO._.customError) {
                                            window.VWO._.customError({
                                                msg: "integration debug",
                                                url: encodeURIComponent(window.location.href),
                                                lineno: "",
                                                colno: "",
                                                source: JSON.stringify({
                                                    f: format,
                                                    a: vwo_account_id,
                                                    url: encodeURIComponent(window.location.href),
                                                    exp: expId,
                                                    v: variationId,
                                                    vwo_uuid: vwo_uuid
                                                })
                                            })
                                        }
                                    } catch (e) {
                                        var vwo_error = ""
                                    }
                                }
                                if (toClearInterval || performance.now() - currentTime >= timeout) {
                                    clearInterval(interval)
                                }
                            }
                            ), pollInterval || 100)
                        }
                    }
                }
                ])
            }
        };
        (function() {
            var VWOOmniTemp = {};
            window.VWOOmni = window.VWOOmni || {};
            for (var key in VWOOmniTemp)
                Object.prototype.hasOwnProperty.call(VWOOmniTemp, key) && (window.VWOOmni[key] = VWOOmniTemp[key]);
            ;
        }
        )();
        (function() {
            window.VWO = window.VWO || [];
            var pollInterval = 100;
            var _vis_data = {};
            var intervalObj = {};
            var analyticsTimerObj = {};
            var experimentListObj = {};
            window.VWO.push(["onVariationApplied", function(data) {
                if (!data) {
                    return
                }
                var expId = data[1]
                  , variationId = data[2];
                if (expId && variationId && ["VISUAL_AB", "VISUAL", "SPLIT_URL"].indexOf(window._vwo_exp[expId].type) > -1) {}
            }
            ])
        }
        )();
        var _vwo_style = document.getElementById('_vis_opt_path_hides')
          , _vwo_css = window._vwo_el_style || '{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;} :root {--vwo-el-opacity:0 !important;--vwo-el-filter:alpha(opacity=0) !important;--vwo-el-bg:none !important;}';
        var _vwo_text = "body > h3:nth-of-type(1)" + _vwo_css;
        if (_vwo_style) {
            if (_vwo_style.styleSheet) {
                _vwo_style.styleSheet.cssText = _vwo_text;
            } else {
                var _vwo_textnode = document.createTextNode(_vwo_text);
                _vwo_style.appendChild(_vwo_textnode);
                _vwo_style.removeChild(_vwo_style.childNodes[0]);
            }
        }
    } else {
        window._vwo_settings_timed_out = 1;
    }
    var _vis_opt_file = 'web/djIkdGU6Ny4wOmFzeW5jJWRlYnVnJWdxdWVyeQ==/tag-fd36214799632efd93d7e839bbf4477d.js'
      , _vwo_library_timer = setTimeout('_vwo_code.finish()', _vwo_code.library_tolerance && typeof _vwo_code.library_tolerance() !== 'undefined' ? _vwo_code.library_tolerance() : 2500)
      , _vis_opt_lib = '//dev.visualwebsiteoptimizer.com/' + _vis_opt_file;
    _vwo_code.load(_vis_opt_lib);
    window.VWO = window.VWO || [];
    window.VWO.isSPA = true;
    window.VWO.push(['enableSPA']);
    ;window.VWO = window.VWO || [];
    window.VWO.data = window.VWO.data || {};
    VWO.data.content = {
        "fns": {
            "list": {
                "args": {
                    "1": {}
                },
                "vn": 1
            }
        }
    };
    window.VWO.data = window.VWO.data || {};
    window.VWO.data.vi = window.VWO.data.vi || {
        "de": "Other",
        "dt": "desktop",
        "br": "Chrome",
        "os": "MacOS"
    };
    ;VWO.DONT_IOS = true;
    ;window._vwo_clicks = window._vwo_clicks || 3;
    ;window.VWO = window.VWO || [];
    window.VWO._ = window.VWO._ || {};
    VWO._.ac = VWO._.ac || {};
    ;window.VWO.data.SCC = '{"cache":0}';
} catch (e) {
    _vwo_code.finish();
    _vwo_code.removeLoaderAndOverlay && _vwo_code.removeLoaderAndOverlay();
    var vwo_e = new Image;
    vwo_e.src = "https://dev.visualwebsiteoptimizer.com/e.gif?a=640628&s=j.php&e=" + encodeURIComponent(e && e.message && e.message.substring(0, 1000)) + "&url" + encodeURIComponent(window.location.href)
}
