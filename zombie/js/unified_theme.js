function labnolThumb(e) {
    return '<img alt="video thumbnail" src="https://i.ytimg.com/vi/ID/hqdefault.jpg">'.replace("ID", e) + '<div class="play"></div>';
}
function labnolIframe() {
    var e = document.createElement("iframe");
    e.setAttribute("src", "https://www.youtube.com/embed/ID?autoplay=1&mute=0".replace("ID", this.dataset.id)),
        e.setAttribute("frameborder", "0"),
        e.setAttribute("allowfullscreen", "1"),
        e.setAttribute("allow", "autoplay"),
        this.parentNode.replaceChild(e, this);
}
if (
    ((function (e) {
        "function" == typeof define && define.amd ? define(["jquery"], e) : e("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto);
    })(function (e) {
        var t,
            n,
            i,
            o,
            s,
            r,
            a = "Close",
            l = "BeforeClose",
            d = "MarkupParse",
            c = "Open",
            u = "Change",
            p = "mfp",
            f = "." + p,
            g = "mfp-ready",
            h = "mfp-removing",
            m = "mfp-prevent-close",
            v = function () {},
            _ = !!window.jQuery,
            y = e(window),
            S = function (e, n) {
                t.ev.on(p + e + f, n);
            },
            C = function (t, n, i, o) {
                var s = document.createElement("div");
                return (s.className = "mfp-" + t), i && (s.innerHTML = i), o ? n && n.appendChild(s) : ((s = e(s)), n && s.appendTo(n)), s;
            },
            w = function (n, i) {
                t.ev.triggerHandler(p + n, i), t.st.callbacks && ((n = n.charAt(0).toLowerCase() + n.slice(1)), t.st.callbacks[n] && t.st.callbacks[n].apply(t, e.isArray(i) ? i : [i]));
            },
            b = function (n) {
                return (n === r && t.currTemplate.closeBtn) || ((t.currTemplate.closeBtn = e(t.st.closeMarkup.replace("%title%", t.st.tClose))), (r = n)), t.currTemplate.closeBtn;
            },
            x = function () {
                e.magnificPopup.instance || ((t = new v()).init(), (e.magnificPopup.instance = t));
            };
        (v.prototype = {
            constructor: v,
            init: function () {
                var n = navigator.appVersion;
                (t.isLowIE = t.isIE8 = document.all && !document.addEventListener),
                    (t.isAndroid = /android/gi.test(n)),
                    (t.isIOS = /iphone|ipad|ipod/gi.test(n)),
                    (t.supportsTransition = (function () {
                        var e = document.createElement("p").style,
                            t = ["ms", "O", "Moz", "Webkit"];
                        if (void 0 !== e.transition) return !0;
                        for (; t.length; ) if (t.pop() + "Transition" in e) return !0;
                        return !1;
                    })()),
                    (t.probablyMobile = t.isAndroid || t.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent)),
                    (i = e(document)),
                    (t.popupsCache = {});
            },
            open: function (n) {
                var o;
                if (!1 === n.isObj) {
                    (t.items = n.items.toArray()), (t.index = 0);
                    var r,
                        a = n.items;
                    for (o = 0; o < a.length; o++)
                        if (((r = a[o]).parsed && (r = r.el[0]), r === n.el[0])) {
                            t.index = o;
                            break;
                        }
                } else (t.items = e.isArray(n.items) ? n.items : [n.items]), (t.index = n.index || 0);
                if (!t.isOpen) {
                    (t.types = []),
                        (s = ""),
                        n.mainEl && n.mainEl.length ? (t.ev = n.mainEl.eq(0)) : (t.ev = i),
                        n.key ? (t.popupsCache[n.key] || (t.popupsCache[n.key] = {}), (t.currTemplate = t.popupsCache[n.key])) : (t.currTemplate = {}),
                        (t.st = e.extend(!0, {}, e.magnificPopup.defaults, n)),
                        (t.fixedContentPos = "auto" === t.st.fixedContentPos ? !t.probablyMobile : t.st.fixedContentPos),
                        t.st.modal && ((t.st.closeOnContentClick = !1), (t.st.closeOnBgClick = !1), (t.st.showCloseBtn = !1), (t.st.enableEscapeKey = !1)),
                        t.bgOverlay ||
                            ((t.bgOverlay = C("bg").on("click" + f, function () {
                                t.close();
                            })),
                            (t.wrap = C("wrap")
                                .attr("tabindex", -1)
                                .on("click" + f, function (e) {
                                    t._checkIfClose(e.target) && t.close();
                                })),
                            (t.container = C("container", t.wrap))),
                        (t.contentContainer = C("content")),
                        t.st.preloader && (t.preloader = C("preloader", t.container, t.st.tLoading));
                    var l = e.magnificPopup.modules;
                    for (o = 0; o < l.length; o++) {
                        var u = l[o];
                        (u = u.charAt(0).toUpperCase() + u.slice(1)), t["init" + u].call(t);
                    }
                    w("BeforeOpen"),
                        t.st.showCloseBtn &&
                            (t.st.closeBtnInside
                                ? (S(d, function (e, t, n, i) {
                                      n.close_replaceWith = b(i.type);
                                  }),
                                  (s += " mfp-close-btn-in"))
                                : t.wrap.append(b())),
                        t.st.alignTop && (s += " mfp-align-top"),
                        t.fixedContentPos ? t.wrap.css({ overflow: t.st.overflowY, overflowX: "hidden", overflowY: t.st.overflowY }) : t.wrap.css({ top: y.scrollTop(), position: "absolute" }),
                        (!1 === t.st.fixedBgPos || ("auto" === t.st.fixedBgPos && !t.fixedContentPos)) && t.bgOverlay.css({ height: i.height(), position: "absolute" }),
                        t.st.enableEscapeKey &&
                            i.on("keyup" + f, function (e) {
                                27 === e.keyCode && t.close();
                            }),
                        y.on("resize" + f, function () {
                            t.updateSize();
                        }),
                        t.st.closeOnContentClick || (s += " mfp-auto-cursor"),
                        s && t.wrap.addClass(s);
                    var p = (t.wH = y.height()),
                        h = {};
                    if (t.fixedContentPos && t._hasScrollBar(p)) {
                        var m = t._getScrollbarSize();
                        m && (h.marginRight = m);
                    }
                    t.fixedContentPos && (t.isIE7 ? e("body, html").css("overflow", "hidden") : (h.overflow = "hidden"));
                    var v = t.st.mainClass;
                    return (
                        t.isIE7 && (v += " mfp-ie7"),
                        v && t._addClassToMFP(v),
                        t.updateItemHTML(),
                        w("BuildControls"),
                        e("html").css(h),
                        t.bgOverlay.add(t.wrap).prependTo(t.st.prependTo || e(document.body)),
                        (t._lastFocusedEl = document.activeElement),
                        setTimeout(function () {
                            t.content ? (t._addClassToMFP(g), t._setFocus()) : t.bgOverlay.addClass(g), i.on("focusin" + f, t._onFocusIn);
                        }, 16),
                        (t.isOpen = !0),
                        t.updateSize(p),
                        w(c),
                        n
                    );
                }
                t.updateItemHTML();
            },
            close: function () {
                t.isOpen &&
                    (w(l),
                    (t.isOpen = !1),
                    t.st.removalDelay && !t.isLowIE && t.supportsTransition
                        ? (t._addClassToMFP(h),
                          setTimeout(function () {
                              t._close();
                          }, t.st.removalDelay))
                        : t._close());
            },
            _close: function () {
                w(a);
                var n = h + " " + g + " ";
                if ((t.bgOverlay.detach(), t.wrap.detach(), t.container.empty(), t.st.mainClass && (n += t.st.mainClass + " "), t._removeClassFromMFP(n), t.fixedContentPos)) {
                    var o = { marginRight: "" };
                    t.isIE7 ? e("body, html").css("overflow", "") : (o.overflow = ""), e("html").css(o);
                }
                i.off("keyup.mfp focusin" + f),
                    t.ev.off(f),
                    t.wrap.attr("class", "mfp-wrap").removeAttr("style"),
                    t.bgOverlay.attr("class", "mfp-bg"),
                    t.container.attr("class", "mfp-container"),
                    !t.st.showCloseBtn || (t.st.closeBtnInside && !0 !== t.currTemplate[t.currItem.type]) || (t.currTemplate.closeBtn && t.currTemplate.closeBtn.detach()),
                    t.st.autoFocusLast && t._lastFocusedEl && e(t._lastFocusedEl).focus(),
                    (t.currItem = null),
                    (t.content = null),
                    (t.currTemplate = null),
                    (t.prevHeight = 0),
                    w("AfterClose");
            },
            updateSize: function (e) {
                if (t.isIOS) {
                    var n = document.documentElement.clientWidth / window.innerWidth,
                        i = window.innerHeight * n;
                    t.wrap.css("height", i), (t.wH = i);
                } else t.wH = e || y.height();
                t.fixedContentPos || t.wrap.css("height", t.wH), w("Resize");
            },
            updateItemHTML: function () {
                var n = t.items[t.index];
                t.contentContainer.detach(), t.content && t.content.detach(), n.parsed || (n = t.parseEl(t.index));
                var i = n.type;
                if ((w("BeforeChange", [t.currItem ? t.currItem.type : "", i]), (t.currItem = n), !t.currTemplate[i])) {
                    var s = !!t.st[i] && t.st[i].markup;
                    w("FirstMarkupParse", s), (t.currTemplate[i] = !s || e(s));
                }
                o && o !== n.type && t.container.removeClass("mfp-" + o + "-holder");
                var r = t["get" + i.charAt(0).toUpperCase() + i.slice(1)](n, t.currTemplate[i]);
                t.appendContent(r, i), (n.preloaded = !0), w(u, n), (o = n.type), t.container.prepend(t.contentContainer), w("AfterChange");
            },
            appendContent: function (e, n) {
                (t.content = e),
                    e ? (t.st.showCloseBtn && t.st.closeBtnInside && !0 === t.currTemplate[n] ? t.content.find(".mfp-close").length || t.content.append(b()) : (t.content = e)) : (t.content = ""),
                    w("BeforeAppend"),
                    t.container.addClass("mfp-" + n + "-holder"),
                    t.contentContainer.append(t.content);
            },
            parseEl: function (n) {
                var i,
                    o = t.items[n];
                if ((o.tagName ? (o = { el: e(o) }) : ((i = o.type), (o = { data: o, src: o.src })), o.el)) {
                    for (var s = t.types, r = 0; r < s.length; r++)
                        if (o.el.hasClass("mfp-" + s[r])) {
                            i = s[r];
                            break;
                        }
                    (o.src = o.el.attr("data-mfp-src")), o.src || (o.src = o.el.attr("href"));
                }
                return (o.type = i || t.st.type || "inline"), (o.index = n), (o.parsed = !0), (t.items[n] = o), w("ElementParse", o), t.items[n];
            },
            addGroup: function (e, n) {
                var i = function (i) {
                    (i.mfpEl = this), t._openClick(i, e, n);
                };
                n || (n = {});
                var o = "click.magnificPopup";
                (n.mainEl = e), n.items ? ((n.isObj = !0), e.off(o).on(o, i)) : ((n.isObj = !1), n.delegate ? e.off(o).on(o, n.delegate, i) : ((n.items = e), e.off(o).on(o, i)));
            },
            _openClick: function (n, i, o) {
                if ((void 0 !== o.midClick ? o.midClick : e.magnificPopup.defaults.midClick) || !(2 === n.which || n.ctrlKey || n.metaKey || n.altKey || n.shiftKey)) {
                    var s = void 0 !== o.disableOn ? o.disableOn : e.magnificPopup.defaults.disableOn;
                    if (s)
                        if (e.isFunction(s)) {
                            if (!s.call(t)) return !0;
                        } else if (y.width() < s) return !0;
                    n.type && (n.preventDefault(), t.isOpen && n.stopPropagation()), (o.el = e(n.mfpEl)), o.delegate && (o.items = i.find(o.delegate)), t.open(o);
                }
            },
            updateStatus: function (e, i) {
                if (t.preloader) {
                    n !== e && t.container.removeClass("mfp-s-" + n), i || "loading" !== e || (i = t.st.tLoading);
                    var o = { status: e, text: i };
                    w("UpdateStatus", o),
                        (e = o.status),
                        (i = o.text),
                        t.preloader.html(i),
                        t.preloader.find("a").on("click", function (e) {
                            e.stopImmediatePropagation();
                        }),
                        t.container.addClass("mfp-s-" + e),
                        (n = e);
                }
            },
            _checkIfClose: function (n) {
                if (!e(n).hasClass(m)) {
                    var i = t.st.closeOnContentClick,
                        o = t.st.closeOnBgClick;
                    if (i && o) return !0;
                    if (!t.content || e(n).hasClass("mfp-close") || (t.preloader && n === t.preloader[0])) return !0;
                    if (n === t.content[0] || e.contains(t.content[0], n)) {
                        if (i) return !0;
                    } else if (o && e.contains(document, n)) return !0;
                    return !1;
                }
            },
            _addClassToMFP: function (e) {
                t.bgOverlay.addClass(e), t.wrap.addClass(e);
            },
            _removeClassFromMFP: function (e) {
                this.bgOverlay.removeClass(e), t.wrap.removeClass(e);
            },
            _hasScrollBar: function (e) {
                return (t.isIE7 ? i.height() : document.body.scrollHeight) > (e || y.height());
            },
            _setFocus: function () {
                (t.st.focus ? t.content.find(t.st.focus).eq(0) : t.wrap).focus();
            },
            _onFocusIn: function (n) {
                return n.target === t.wrap[0] || e.contains(t.wrap[0], n.target) ? void 0 : (t._setFocus(), !1);
            },
            _parseMarkup: function (t, n, i) {
                var o;
                i.data && (n = e.extend(i.data, n)),
                    w(d, [t, n, i]),
                    e.each(n, function (n, i) {
                        if (void 0 === i || !1 === i) return !0;
                        if ((o = n.split("_")).length > 1) {
                            var s = t.find(f + "-" + o[0]);
                            if (s.length > 0) {
                                var r = o[1];
                                "replaceWith" === r ? s[0] !== i[0] && s.replaceWith(i) : "img" === r ? (s.is("img") ? s.attr("src", i) : s.replaceWith(e("<img>").attr("src", i).attr("class", s.attr("class")))) : s.attr(o[1], i);
                            }
                        } else t.find(f + "-" + n).html(i);
                    });
            },
            _getScrollbarSize: function () {
                if (void 0 === t.scrollbarSize) {
                    var e = document.createElement("div");
                    (e.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;"), document.body.appendChild(e), (t.scrollbarSize = e.offsetWidth - e.clientWidth), document.body.removeChild(e);
                }
                return t.scrollbarSize;
            },
        }),
            (e.magnificPopup = {
                instance: null,
                proto: v.prototype,
                modules: [],
                open: function (t, n) {
                    return x(), ((t = t ? e.extend(!0, {}, t) : {}).isObj = !0), (t.index = n || 0), this.instance.open(t);
                },
                close: function () {
                    return e.magnificPopup.instance && e.magnificPopup.instance.close();
                },
                registerModule: function (t, n) {
                    n.options && (e.magnificPopup.defaults[t] = n.options), e.extend(this.proto, n.proto), this.modules.push(t);
                },
                defaults: {
                    disableOn: 0,
                    key: null,
                    midClick: !1,
                    mainClass: "",
                    preloader: !0,
                    focus: "",
                    closeOnContentClick: !1,
                    closeOnBgClick: !0,
                    closeBtnInside: !0,
                    showCloseBtn: !0,
                    enableEscapeKey: !0,
                    modal: !1,
                    alignTop: !1,
                    removalDelay: 0,
                    prependTo: null,
                    fixedContentPos: "auto",
                    fixedBgPos: "auto",
                    overflowY: "auto",
                    closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
                    tClose: "Close (Esc)",
                    tLoading: "Loading...",
                    autoFocusLast: !0,
                },
            }),
            (e.fn.magnificPopup = function (n) {
                x();
                var i = e(this);
                if ("string" == typeof n)
                    if ("open" === n) {
                        var o,
                            s = _ ? i.data("magnificPopup") : i[0].magnificPopup,
                            r = parseInt(arguments[1], 10) || 0;
                        s.items ? (o = s.items[r]) : ((o = i), s.delegate && (o = o.find(s.delegate)), (o = o.eq(r))), t._openClick({ mfpEl: o }, i, s);
                    } else t.isOpen && t[n].apply(t, Array.prototype.slice.call(arguments, 1));
                else (n = e.extend(!0, {}, n)), _ ? i.data("magnificPopup", n) : (i[0].magnificPopup = n), t.addGroup(i, n);
                return i;
            });
        var E,
            I,
            T,
            k = "inline",
            A = function () {
                T && (I.after(T.addClass(E)).detach(), (T = null));
            };
        e.magnificPopup.registerModule(k, {
            options: { hiddenClass: "hide", markup: "", tNotFound: "Content not found" },
            proto: {
                initInline: function () {
                    t.types.push(k),
                        S(a + "." + k, function () {
                            A();
                        });
                },
                getInline: function (n, i) {
                    if ((A(), n.src)) {
                        var o = t.st.inline,
                            s = e(n.src);
                        if (s.length) {
                            var r = s[0].parentNode;
                            r && r.tagName && (I || ((E = o.hiddenClass), (I = C(E)), (E = "mfp-" + E)), (T = s.after(I).detach().removeClass(E))), t.updateStatus("ready");
                        } else t.updateStatus("error", o.tNotFound), (s = e("<div>"));
                        return (n.inlineElement = s), s;
                    }
                    return t.updateStatus("ready"), t._parseMarkup(i, {}, n), i;
                },
            },
        });
        var D,
            P,
            O,
            N = "ajax",
            M = function () {
                D && e(document.body).removeClass(D);
            },
            z = function () {
                M(), t.req && t.req.abort();
            };
        e.magnificPopup.registerModule(N, {
            options: { settings: null, cursor: "mfp-ajax-cur", tError: '<a href="%url%">The content</a> could not be loaded.' },
            proto: {
                initAjax: function () {
                    t.types.push(N), (D = t.st.ajax.cursor), S(a + "." + N, z), S("BeforeChange." + N, z);
                },
                getAjax: function (n) {
                    D && e(document.body).addClass(D), t.updateStatus("loading");
                    var i = e.extend(
                        {
                            url: n.src,
                            success: function (i, o, s) {
                                var r = { data: i, xhr: s };
                                w("ParseAjax", r),
                                    t.appendContent(e(r.data), N),
                                    (n.finished = !0),
                                    M(),
                                    t._setFocus(),
                                    setTimeout(function () {
                                        t.wrap.addClass(g);
                                    }, 16),
                                    t.updateStatus("ready"),
                                    w("AjaxContentAdded");
                            },
                            error: function () {
                                M(), (n.finished = n.loadError = !0), t.updateStatus("error", t.st.ajax.tError.replace("%url%", n.src));
                            },
                        },
                        t.st.ajax.settings
                    );
                    return (t.req = e.ajax(i)), "";
                },
            },
        }),
            e.magnificPopup.registerModule("image", {
                options: {
                    markup:
                        '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
                    cursor: "mfp-zoom-out-cur",
                    titleSrc: "title",
                    verticalFit: !0,
                    tError: '<a href="%url%">The image</a> could not be loaded.',
                },
                proto: {
                    initImage: function () {
                        var n = t.st.image,
                            i = ".image";
                        t.types.push("image"),
                            S(c + i, function () {
                                "image" === t.currItem.type && n.cursor && e(document.body).addClass(n.cursor);
                            }),
                            S(a + i, function () {
                                n.cursor && e(document.body).removeClass(n.cursor), y.off("resize" + f);
                            }),
                            S("Resize" + i, t.resizeImage),
                            t.isLowIE && S("AfterChange", t.resizeImage);
                    },
                    resizeImage: function () {
                        var e = t.currItem;
                        if (e && e.img && t.st.image.verticalFit) {
                            var n = 0;
                            t.isLowIE && (n = parseInt(e.img.css("padding-top"), 10) + parseInt(e.img.css("padding-bottom"), 10)), e.img.css("max-height", t.wH - n);
                        }
                    },
                    _onImageHasSize: function (e) {
                        e.img && ((e.hasSize = !0), P && clearInterval(P), (e.isCheckingImgSize = !1), w("ImageHasSize", e), e.imgHidden && (t.content && t.content.removeClass("mfp-loading"), (e.imgHidden = !1)));
                    },
                    findImageSize: function (e) {
                        var n = 0,
                            i = e.img[0],
                            o = function (s) {
                                P && clearInterval(P),
                                    (P = setInterval(function () {
                                        return i.naturalWidth > 0 ? void t._onImageHasSize(e) : (n > 200 && clearInterval(P), void (3 == ++n ? o(10) : 40 === n ? o(50) : 100 === n && o(500)));
                                    }, s));
                            };
                        o(1);
                    },
                    getImage: function (n, i) {
                        var o = 0,
                            s = function () {
                                n &&
                                    (n.img[0].complete
                                        ? (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("ready")), (n.hasSize = !0), (n.loaded = !0), w("ImageLoadComplete"))
                                        : 200 > ++o
                                        ? setTimeout(s, 100)
                                        : r());
                            },
                            r = function () {
                                n && (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("error", a.tError.replace("%url%", n.src))), (n.hasSize = !0), (n.loaded = !0), (n.loadError = !0));
                            },
                            a = t.st.image,
                            l = i.find(".mfp-img");
                        if (l.length) {
                            var d = document.createElement("img");
                            (d.className = "mfp-img"),
                                n.el && n.el.find("img").length && (d.alt = n.el.find("img").attr("alt")),
                                (n.img = e(d).on("load.mfploader", s).on("error.mfploader", r)),
                                (d.src = n.src),
                                l.is("img") && (n.img = n.img.clone()),
                                (d = n.img[0]).naturalWidth > 0 ? (n.hasSize = !0) : d.width || (n.hasSize = !1);
                        }
                        return (
                            t._parseMarkup(
                                i,
                                {
                                    title: (function (n) {
                                        if (n.data && void 0 !== n.data.title) return n.data.title;
                                        var i = t.st.image.titleSrc;
                                        if (i) {
                                            if (e.isFunction(i)) return i.call(t, n);
                                            if (n.el) return n.el.attr(i) || "";
                                        }
                                        return "";
                                    })(n),
                                    img_replaceWith: n.img,
                                },
                                n
                            ),
                            t.resizeImage(),
                            n.hasSize
                                ? (P && clearInterval(P), n.loadError ? (i.addClass("mfp-loading"), t.updateStatus("error", a.tError.replace("%url%", n.src))) : (i.removeClass("mfp-loading"), t.updateStatus("ready")), i)
                                : (t.updateStatus("loading"), (n.loading = !0), n.hasSize || ((n.imgHidden = !0), i.addClass("mfp-loading"), t.findImageSize(n)), i)
                        );
                    },
                },
            }),
            e.magnificPopup.registerModule("zoom", {
                options: {
                    enabled: !1,
                    easing: "ease-in-out",
                    duration: 300,
                    opener: function (e) {
                        return e.is("img") ? e : e.find("img");
                    },
                },
                proto: {
                    initZoom: function () {
                        var e,
                            n = t.st.zoom,
                            i = ".zoom";
                        if (n.enabled && t.supportsTransition) {
                            var o,
                                s,
                                r = n.duration,
                                d = function (e) {
                                    var t = e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                        i = "all " + n.duration / 1e3 + "s " + n.easing,
                                        o = { position: "fixed", zIndex: 9999, left: 0, top: 0, "-webkit-backface-visibility": "hidden" },
                                        s = "transition";
                                    return (o["-webkit-" + s] = o["-moz-" + s] = o["-o-" + s] = o[s] = i), t.css(o), t;
                                },
                                c = function () {
                                    t.content.css("visibility", "visible");
                                };
                            S("BuildControls" + i, function () {
                                if (t._allowZoom()) {
                                    if ((clearTimeout(o), t.content.css("visibility", "hidden"), !(e = t._getItemToZoom()))) return void c();
                                    (s = d(e)).css(t._getOffset()),
                                        t.wrap.append(s),
                                        (o = setTimeout(function () {
                                            s.css(t._getOffset(!0)),
                                                (o = setTimeout(function () {
                                                    c(),
                                                        setTimeout(function () {
                                                            s.remove(), (e = s = null), w("ZoomAnimationEnded");
                                                        }, 16);
                                                }, r));
                                        }, 16));
                                }
                            }),
                                S(l + i, function () {
                                    if (t._allowZoom()) {
                                        if ((clearTimeout(o), (t.st.removalDelay = r), !e)) {
                                            if (!(e = t._getItemToZoom())) return;
                                            s = d(e);
                                        }
                                        s.css(t._getOffset(!0)),
                                            t.wrap.append(s),
                                            t.content.css("visibility", "hidden"),
                                            setTimeout(function () {
                                                s.css(t._getOffset());
                                            }, 16);
                                    }
                                }),
                                S(a + i, function () {
                                    t._allowZoom() && (c(), s && s.remove(), (e = null));
                                });
                        }
                    },
                    _allowZoom: function () {
                        return "image" === t.currItem.type;
                    },
                    _getItemToZoom: function () {
                        return !!t.currItem.hasSize && t.currItem.img;
                    },
                    _getOffset: function (n) {
                        var i,
                            o = (i = n ? t.currItem.img : t.st.zoom.opener(t.currItem.el || t.currItem)).offset(),
                            s = parseInt(i.css("padding-top"), 10),
                            r = parseInt(i.css("padding-bottom"), 10);
                        o.top -= e(window).scrollTop() - s;
                        var a = { width: i.width(), height: (_ ? i.innerHeight() : i[0].offsetHeight) - r - s };
                        return (
                            void 0 === O && (O = void 0 !== document.createElement("p").style.MozTransform), O ? (a["-moz-transform"] = a.transform = "translate(" + o.left + "px," + o.top + "px)") : ((a.left = o.left), (a.top = o.top)), a
                        );
                    },
                },
            });
        var H = "iframe",
            L = function (e) {
                if (t.currTemplate[H]) {
                    var n = t.currTemplate[H].find("iframe");
                    n.length && (e || (n[0].src = "//about:blank"), t.isIE8 && n.css("display", e ? "block" : "none"));
                }
            };
        e.magnificPopup.registerModule(H, {
            options: {
                markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
                srcAction: "iframe_src",
                patterns: {
                    youtube: { index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" },
                    vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" },
                    gmaps: { index: "//maps.google.", src: "%id%&output=embed" },
                },
            },
            proto: {
                initIframe: function () {
                    t.types.push(H),
                        S("BeforeChange", function (e, t, n) {
                            t !== n && (t === H ? L() : n === H && L(!0));
                        }),
                        S(a + "." + H, function () {
                            L();
                        });
                },
                getIframe: function (n, i) {
                    var o = n.src,
                        s = t.st.iframe;
                    e.each(s.patterns, function () {
                        return o.indexOf(this.index) > -1 ? (this.id && (o = "string" == typeof this.id ? o.substr(o.lastIndexOf(this.id) + this.id.length, o.length) : this.id.call(this, o)), (o = this.src.replace("%id%", o)), !1) : void 0;
                    });
                    var r = {};
                    return s.srcAction && (r[s.srcAction] = o), t._parseMarkup(i, r, n), t.updateStatus("ready"), i;
                },
            },
        });
        var W = function (e) {
                var n = t.items.length;
                return e > n - 1 ? e - n : 0 > e ? n + e : e;
            },
            B = function (e, t, n) {
                return e.replace(/%curr%/gi, t + 1).replace(/%total%/gi, n);
            };
        e.magnificPopup.registerModule("gallery", {
            options: {
                enabled: !1,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                preload: [0, 2],
                navigateByImgClick: !0,
                arrows: !0,
                tPrev: "Previous (Left arrow key)",
                tNext: "Next (Right arrow key)",
                tCounter: "%curr% of %total%",
            },
            proto: {
                initGallery: function () {
                    var n = t.st.gallery,
                        o = ".mfp-gallery";
                    return (
                        (t.direction = !0),
                        !(!n || !n.enabled) &&
                            ((s += " mfp-gallery"),
                            S(c + o, function () {
                                n.navigateByImgClick &&
                                    t.wrap.on("click" + o, ".mfp-img", function () {
                                        return t.items.length > 1 ? (t.next(), !1) : void 0;
                                    }),
                                    i.on("keydown" + o, function (e) {
                                        37 === e.keyCode ? t.prev() : 39 === e.keyCode && t.next();
                                    });
                            }),
                            S("UpdateStatus" + o, function (e, n) {
                                n.text && (n.text = B(n.text, t.currItem.index, t.items.length));
                            }),
                            S(d + o, function (e, i, o, s) {
                                var r = t.items.length;
                                o.counter = r > 1 ? B(n.tCounter, s.index, r) : "";
                            }),
                            S("BuildControls" + o, function () {
                                if (t.items.length > 1 && n.arrows && !t.arrowLeft) {
                                    var i = n.arrowMarkup,
                                        o = (t.arrowLeft = e(i.replace(/%title%/gi, n.tPrev).replace(/%dir%/gi, "left")).addClass(m)),
                                        s = (t.arrowRight = e(i.replace(/%title%/gi, n.tNext).replace(/%dir%/gi, "right")).addClass(m));
                                    o.click(function () {
                                        t.prev();
                                    }),
                                        s.click(function () {
                                            t.next();
                                        }),
                                        t.container.append(o.add(s));
                                }
                            }),
                            S(u + o, function () {
                                t._preloadTimeout && clearTimeout(t._preloadTimeout),
                                    (t._preloadTimeout = setTimeout(function () {
                                        t.preloadNearbyImages(), (t._preloadTimeout = null);
                                    }, 16));
                            }),
                            void S(a + o, function () {
                                i.off(o), t.wrap.off("click" + o), (t.arrowRight = t.arrowLeft = null);
                            }))
                    );
                },
                next: function () {
                    (t.direction = !0), (t.index = W(t.index + 1)), t.updateItemHTML();
                },
                prev: function () {
                    (t.direction = !1), (t.index = W(t.index - 1)), t.updateItemHTML();
                },
                goTo: function (e) {
                    (t.direction = e >= t.index), (t.index = e), t.updateItemHTML();
                },
                preloadNearbyImages: function () {
                    var e,
                        n = t.st.gallery.preload,
                        i = Math.min(n[0], t.items.length),
                        o = Math.min(n[1], t.items.length);
                    for (e = 1; e <= (t.direction ? o : i); e++) t._preloadItem(t.index + e);
                    for (e = 1; e <= (t.direction ? i : o); e++) t._preloadItem(t.index - e);
                },
                _preloadItem: function (n) {
                    if (((n = W(n)), !t.items[n].preloaded)) {
                        var i = t.items[n];
                        i.parsed || (i = t.parseEl(n)),
                            w("LazyLoad", i),
                            "image" === i.type &&
                                (i.img = e('<img class="mfp-img" />')
                                    .on("load.mfploader", function () {
                                        i.hasSize = !0;
                                    })
                                    .on("error.mfploader", function () {
                                        (i.hasSize = !0), (i.loadError = !0), w("LazyLoadError", i);
                                    })
                                    .attr("src", i.src)),
                            (i.preloaded = !0);
                    }
                },
            },
        });
        var j = "retina";
        e.magnificPopup.registerModule(j, {
            options: {
                replaceSrc: function (e) {
                    return e.src.replace(/\.\w+$/, function (e) {
                        return "@2x" + e;
                    });
                },
                ratio: 1,
            },
            proto: {
                initRetina: function () {
                    if (window.devicePixelRatio > 1) {
                        var e = t.st.retina,
                            n = e.ratio;
                        (n = isNaN(n) ? n() : n) > 1 &&
                            (S("ImageHasSize." + j, function (e, t) {
                                t.img.css({ "max-width": t.img[0].naturalWidth / n, width: "100%" });
                            }),
                            S("ElementParse." + j, function (t, i) {
                                i.src = e.replaceSrc(i, n);
                            }));
                    }
                },
            },
        }),
            x();
    }),
    $(".lightbox-inline").magnificPopup({ type: "inline" }),
    $(".gallery").each(function () {
        $(this).magnificPopup({ delegate: ".gallery-item a", type: "image", gallery: { enabled: !0 } });
    }),
    document.addEventListener("DOMContentLoaded", function () {
        var e,
            t,
            n = document.getElementsByClassName("youtube-player");
        for (t = 0; t < n.length; t++) (e = document.createElement("div")).setAttribute("data-id", n[t].dataset.id), (e.innerHTML = labnolThumb(n[t].dataset.id)), (e.onclick = labnolIframe), n[t].appendChild(e);
    }),
    (function (e) {
        var t = {},
            n = {
                mode: "horizontal",
                slideSelector: "",
                infiniteLoop: !0,
                hideControlOnEnd: !1,
                speed: 500,
                easing: null,
                slideMargin: 0,
                startSlide: 0,
                randomStart: !1,
                captions: !1,
                ticker: !1,
                tickerHover: !1,
                adaptiveHeight: !1,
                adaptiveHeightSpeed: 500,
                video: !1,
                useCSS: !0,
                preloadImages: "visible",
                responsive: !0,
                slideZIndex: 50,
                touchEnabled: !0,
                swipeThreshold: 50,
                oneToOneTouch: !0,
                preventDefaultSwipeX: !0,
                preventDefaultSwipeY: !1,
                pager: !0,
                pagerType: "full",
                pagerShortSeparator: " / ",
                pagerSelector: null,
                buildPager: null,
                pagerCustom: null,
                controls: !0,
                nextText: "Next",
                prevText: "Prev",
                nextSelector: null,
                prevSelector: null,
                autoControls: !1,
                startText: "Start",
                stopText: "Stop",
                autoControlsCombine: !1,
                autoControlsSelector: null,
                auto: !1,
                pause: 4e3,
                autoStart: !0,
                autoDirection: "next",
                autoHover: !1,
                autoDelay: 0,
                minSlides: 1,
                maxSlides: 1,
                moveSlides: 0,
                slideWidth: 0,
                onSliderLoad: function () {},
                onSlideBefore: function () {},
                onSlideAfter: function () {},
                onSlideNext: function () {},
                onSlidePrev: function () {},
                onSliderResize: function () {},
            };
        e.fn.bxSlider = function (o) {
            if (0 == this.length) return this;
            if (this.length > 1)
                return (
                    this.each(function () {
                        e(this).bxSlider(o);
                    }),
                    this
                );
            var s = {},
                r = this;
            t.el = this;
            var a = e(window).width(),
                l = e(window).height(),
                d = function () {
                    (s.settings = e.extend({}, n, o)),
                        (s.settings.slideWidth = parseInt(s.settings.slideWidth)),
                        (s.children = r.children(s.settings.slideSelector)),
                        s.children.length < s.settings.minSlides && (s.settings.minSlides = s.children.length),
                        s.children.length < s.settings.maxSlides && (s.settings.maxSlides = s.children.length),
                        s.settings.randomStart && (s.settings.startSlide = Math.floor(Math.random() * s.children.length)),
                        (s.active = { index: s.settings.startSlide }),
                        (s.carousel = s.settings.minSlides > 1 || s.settings.maxSlides > 1),
                        s.carousel && (s.settings.preloadImages = "all"),
                        (s.minThreshold = s.settings.minSlides * s.settings.slideWidth + (s.settings.minSlides - 1) * s.settings.slideMargin),
                        (s.maxThreshold = s.settings.maxSlides * s.settings.slideWidth + (s.settings.maxSlides - 1) * s.settings.slideMargin),
                        (s.working = !1),
                        (s.controls = {}),
                        (s.interval = null),
                        (s.animProp = "vertical" == s.settings.mode ? "top" : "left"),
                        (s.usingCSS =
                            s.settings.useCSS &&
                            "fade" != s.settings.mode &&
                            (function () {
                                var e = document.createElement("div"),
                                    t = ["WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                                for (var n in t) if (void 0 !== e.style[t[n]]) return (s.cssPrefix = t[n].replace("Perspective", "").toLowerCase()), (s.animProp = "-" + s.cssPrefix + "-transform"), !0;
                                return !1;
                            })()),
                        "vertical" == s.settings.mode && (s.settings.maxSlides = s.settings.minSlides),
                        r.data("origStyle", r.attr("style")),
                        r.children(s.settings.slideSelector).each(function () {
                            e(this).data("origStyle", e(this).attr("style"));
                        }),
                        c();
                },
                c = function () {
                    r.wrap('<div class="bx-wrapper"><div class="bx-viewport"></div></div>'),
                        (s.viewport = r.parent()),
                        (s.loader = e('<div class="bx-loading" />')),
                        s.viewport.prepend(s.loader),
                        r.css({ width: "horizontal" == s.settings.mode ? 100 * s.children.length + 215 + "%" : "auto", position: "relative" }),
                        s.usingCSS && s.settings.easing ? r.css("-" + s.cssPrefix + "-transition-timing-function", s.settings.easing) : s.settings.easing || (s.settings.easing = "swing"),
                        m(),
                        s.viewport.css({ width: "100%", overflow: "hidden", position: "relative" }),
                        s.viewport.parent().css({ maxWidth: g() }),
                        s.settings.pager || s.viewport.parent().css({ margin: "0 auto 0px" }),
                        s.children.css({ float: "horizontal" == s.settings.mode ? "left" : "none", listStyle: "none", position: "relative" }),
                        s.children.css("width", h()),
                        "horizontal" == s.settings.mode && s.settings.slideMargin > 0 && s.children.css("marginRight", s.settings.slideMargin),
                        "vertical" == s.settings.mode && s.settings.slideMargin > 0 && s.children.css("marginBottom", s.settings.slideMargin),
                        "fade" == s.settings.mode && (s.children.css({ position: "absolute", zIndex: 0, display: "none" }), s.children.eq(s.settings.startSlide).css({ zIndex: s.settings.slideZIndex, display: "block" })),
                        (s.controls.el = e('<div class="bx-controls" />')),
                        s.settings.captions && E(),
                        (s.active.last = s.settings.startSlide == v() - 1),
                        s.settings.video && r.fitVids();
                    var t = s.children.eq(s.settings.startSlide);
                    "all" == s.settings.preloadImages && (t = s.children),
                        s.settings.ticker
                            ? (s.settings.pager = !1)
                            : (s.settings.pager && w(), s.settings.controls && b(), s.settings.auto && s.settings.autoControls && x(), (s.settings.controls || s.settings.autoControls || s.settings.pager) && s.viewport.after(s.controls.el)),
                        u(t, p);
                },
                u = function (t, n) {
                    var i = t.find("img, iframe").length;
                    if (0 != i) {
                        var o = 0;
                        t.find("img, iframe").each(function () {
                            e(this)
                                .one("load", function () {
                                    ++o == i && n();
                                })
                                .each(function () {
                                    this.complete && e(this).load();
                                });
                        });
                    } else n();
                },
                p = function () {
                    if (s.settings.infiniteLoop && "fade" != s.settings.mode && !s.settings.ticker) {
                        var t = "vertical" == s.settings.mode ? s.settings.minSlides : s.settings.maxSlides,
                            n = s.children.slice(0, t).clone().addClass("bx-clone"),
                            i = s.children.slice(-t).clone().addClass("bx-clone");
                        r.append(n).prepend(i);
                    }
                    s.loader.remove(),
                        y(),
                        "vertical" == s.settings.mode && (s.settings.adaptiveHeight = !0),
                        s.viewport.height(f()),
                        r.redrawSlider(),
                        s.settings.onSliderLoad(s.active.index),
                        (s.initialized = !0),
                        s.settings.responsive && e(window).bind("resize", R),
                        s.settings.auto && s.settings.autoStart && z(),
                        s.settings.ticker && H(),
                        s.settings.pager && P(s.settings.startSlide),
                        s.settings.controls && M(),
                        s.settings.touchEnabled && !s.settings.ticker && W();
                },
                f = function () {
                    var t = 0,
                        n = e();
                    if ("vertical" == s.settings.mode || s.settings.adaptiveHeight)
                        if (s.carousel) {
                            var o = 1 == s.settings.moveSlides ? s.active.index : s.active.index * _();
                            for (n = s.children.eq(o), i = 1; i <= s.settings.maxSlides - 1; i++) n = o + i >= s.children.length ? n.add(s.children.eq(i - 1)) : n.add(s.children.eq(o + i));
                        } else n = s.children.eq(s.active.index);
                    else n = s.children;
                    return (
                        "vertical" == s.settings.mode
                            ? (n.each(function () {
                                  t += e(this).outerHeight();
                              }),
                              s.settings.slideMargin > 0 && (t += s.settings.slideMargin * (s.settings.minSlides - 1)))
                            : (t = Math.max.apply(
                                  Math,
                                  n
                                      .map(function () {
                                          return e(this).outerHeight(!1);
                                      })
                                      .get()
                              )),
                        t
                    );
                },
                g = function () {
                    var e = "100%";
                    return s.settings.slideWidth > 0 && (e = "horizontal" == s.settings.mode ? s.settings.maxSlides * s.settings.slideWidth + (s.settings.maxSlides - 1) * s.settings.slideMargin : s.settings.slideWidth), e;
                },
                h = function () {
                    var e = s.settings.slideWidth,
                        t = s.viewport.width();
                    return (
                        0 == s.settings.slideWidth || (s.settings.slideWidth > t && !s.carousel) || "vertical" == s.settings.mode
                            ? (e = t)
                            : s.settings.maxSlides > 1 && "horizontal" == s.settings.mode && (t > s.maxThreshold || (t < s.minThreshold && (e = (t - s.settings.slideMargin * (s.settings.minSlides - 1)) / s.settings.minSlides))),
                        e
                    );
                },
                m = function () {
                    var e = 1;
                    if ("horizontal" == s.settings.mode && s.settings.slideWidth > 0)
                        if (s.viewport.width() < s.minThreshold) e = s.settings.minSlides;
                        else if (s.viewport.width() > s.maxThreshold) e = s.settings.maxSlides;
                        else {
                            var t = s.children.first().width();
                            e = Math.floor(s.viewport.width() / t);
                        }
                    else "vertical" == s.settings.mode && (e = s.settings.minSlides);
                    return e;
                },
                v = function () {
                    var e = 0;
                    if (s.settings.moveSlides > 0)
                        if (s.settings.infiniteLoop) e = s.children.length / _();
                        else for (var t = 0, n = 0; t < s.children.length; ) ++e, (t = n + m()), (n += s.settings.moveSlides <= m() ? s.settings.moveSlides : m());
                    else e = Math.ceil(s.children.length / m());
                    return e;
                },
                _ = function () {
                    return s.settings.moveSlides > 0 && s.settings.moveSlides <= m() ? s.settings.moveSlides : m();
                },
                y = function () {
                    if (s.children.length > s.settings.maxSlides && s.active.last && !s.settings.infiniteLoop) {
                        if ("horizontal" == s.settings.mode) {
                            var e = s.children.last(),
                                t = e.position();
                            S(-(t.left - (s.viewport.width() - e.width())), "reset", 0);
                        } else if ("vertical" == s.settings.mode) {
                            var n = s.children.length - s.settings.minSlides;
                            (t = s.children.eq(n).position()), S(-t.top, "reset", 0);
                        }
                    } else
                        (t = s.children.eq(s.active.index * _()).position()),
                            s.active.index == v() - 1 && (s.active.last = !0),
                            null != t && ("horizontal" == s.settings.mode ? S(-t.left, "reset", 0) : "vertical" == s.settings.mode && S(-t.top, "reset", 0));
                },
                S = function (e, t, n, i) {
                    if (s.usingCSS) {
                        var o = "vertical" == s.settings.mode ? "translate3d(0, " + e + "px, 0)" : "translate3d(" + e + "px, 0, 0)";
                        r.css("-" + s.cssPrefix + "-transition-duration", n / 1e3 + "s"),
                            "slide" == t
                                ? (r.css(s.animProp, o),
                                  r.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function () {
                                      r.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"), O();
                                  }))
                                : "reset" == t
                                ? r.css(s.animProp, o)
                                : "ticker" == t &&
                                  (r.css("-" + s.cssPrefix + "-transition-timing-function", "linear"),
                                  r.css(s.animProp, o),
                                  r.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function () {
                                      r.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"), S(i.resetValue, "reset", 0), L();
                                  }));
                    } else {
                        var a = {};
                        (a[s.animProp] = e),
                            "slide" == t
                                ? r.animate(a, n, s.settings.easing, function () {
                                      O();
                                  })
                                : "reset" == t
                                ? r.css(s.animProp, e)
                                : "ticker" == t &&
                                  r.animate(a, speed, "linear", function () {
                                      S(i.resetValue, "reset", 0), L();
                                  });
                    }
                },
                C = function () {
                    for (var t = "", n = v(), i = 0; n > i; i++) {
                        var o = "";
                        s.settings.buildPager && e.isFunction(s.settings.buildPager) ? ((o = s.settings.buildPager(i)), s.pagerEl.addClass("bx-custom-pager")) : ((o = i + 1), s.pagerEl.addClass("bx-default-pager")),
                            (t += '<div class="bx-pager-item"><a href="" data-slide-index="' + i + '" class="bx-pager-link">' + o + "</a></div>");
                    }
                    s.pagerEl.html(t);
                },
                w = function () {
                    s.settings.pagerCustom
                        ? (s.pagerEl = e(s.settings.pagerCustom))
                        : ((s.pagerEl = e('<div class="bx-pager" />')), s.settings.pagerSelector ? e(s.settings.pagerSelector).html(s.pagerEl) : s.controls.el.addClass("bx-has-pager").append(s.pagerEl), C()),
                        s.pagerEl.on("click", "a", D);
                },
                b = function () {
                    (s.controls.next = e('<a class="bx-next" href="">' + s.settings.nextText + "</a>")),
                        (s.controls.prev = e('<a class="bx-prev" href="">' + s.settings.prevText + "</a>")),
                        s.controls.next.bind("click", I),
                        s.controls.prev.bind("click", T),
                        s.settings.nextSelector && e(s.settings.nextSelector).append(s.controls.next),
                        s.settings.prevSelector && e(s.settings.prevSelector).append(s.controls.prev),
                        s.settings.nextSelector ||
                            s.settings.prevSelector ||
                            ((s.controls.directionEl = e('<div class="bx-controls-direction" />')),
                            s.controls.directionEl.append(s.controls.prev).append(s.controls.next),
                            s.controls.el.addClass("bx-has-controls-direction").append(s.controls.directionEl));
                },
                x = function () {
                    (s.controls.start = e('<div class="bx-controls-auto-item"><a class="bx-start" href="">' + s.settings.startText + "</a></div>")),
                        (s.controls.stop = e('<div class="bx-controls-auto-item"><a class="bx-stop" href="">' + s.settings.stopText + "</a></div>")),
                        (s.controls.autoEl = e('<div class="bx-controls-auto" />')),
                        s.controls.autoEl.on("click", ".bx-start", k),
                        s.controls.autoEl.on("click", ".bx-stop", A),
                        s.settings.autoControlsCombine ? s.controls.autoEl.append(s.controls.start) : s.controls.autoEl.append(s.controls.start).append(s.controls.stop),
                        s.settings.autoControlsSelector ? e(s.settings.autoControlsSelector).html(s.controls.autoEl) : s.controls.el.addClass("bx-has-controls-auto").append(s.controls.autoEl),
                        N(s.settings.autoStart ? "stop" : "start");
                },
                E = function () {
                    s.children.each(function () {
                        var t = e(this).find("img:first").attr("title");
                        null != t && ("" + t).length && e(this).append('<div class="bx-caption"><span>' + t + "</span></div>");
                    });
                },
                I = function (e) {
                    s.settings.auto && r.stopAuto(), r.goToNextSlide(), e.preventDefault();
                },
                T = function (e) {
                    s.settings.auto && r.stopAuto(), r.goToPrevSlide(), e.preventDefault();
                },
                k = function (e) {
                    r.startAuto(), e.preventDefault();
                },
                A = function (e) {
                    r.stopAuto(), e.preventDefault();
                },
                D = function (t) {
                    s.settings.auto && r.stopAuto();
                    var n = e(t.currentTarget),
                        i = parseInt(n.attr("data-slide-index"));
                    i != s.active.index && r.goToSlide(i), t.preventDefault();
                },
                P = function (t) {
                    var n = s.children.length;
                    return "short" == s.settings.pagerType
                        ? (s.settings.maxSlides > 1 && (n = Math.ceil(s.children.length / s.settings.maxSlides)), void s.pagerEl.html(t + 1 + s.settings.pagerShortSeparator + n))
                        : (s.pagerEl.find("a").removeClass("active"),
                          void s.pagerEl.each(function (n, i) {
                              e(i).find("a").eq(t).addClass("active");
                          }));
                },
                O = function () {
                    if (s.settings.infiniteLoop) {
                        var e = "";
                        0 == s.active.index
                            ? (e = s.children.eq(0).position())
                            : s.active.index == v() - 1 && s.carousel
                            ? (e = s.children.eq((v() - 1) * _()).position())
                            : s.active.index == s.children.length - 1 && (e = s.children.eq(s.children.length - 1).position()),
                            e && ("horizontal" == s.settings.mode ? S(-e.left, "reset", 0) : "vertical" == s.settings.mode && S(-e.top, "reset", 0));
                    }
                    (s.working = !1), s.settings.onSlideAfter(s.children.eq(s.active.index), s.oldIndex, s.active.index);
                },
                N = function (e) {
                    s.settings.autoControlsCombine ? s.controls.autoEl.html(s.controls[e]) : (s.controls.autoEl.find("a").removeClass("active"), s.controls.autoEl.find("a:not(.bx-" + e + ")").addClass("active"));
                },
                M = function () {
                    1 == v()
                        ? (s.controls.prev.addClass("disabled"), s.controls.next.addClass("disabled"))
                        : !s.settings.infiniteLoop &&
                          s.settings.hideControlOnEnd &&
                          (0 == s.active.index
                              ? (s.controls.prev.addClass("disabled"), s.controls.next.removeClass("disabled"))
                              : s.active.index == v() - 1
                              ? (s.controls.next.addClass("disabled"), s.controls.prev.removeClass("disabled"))
                              : (s.controls.prev.removeClass("disabled"), s.controls.next.removeClass("disabled")));
                },
                z = function () {
                    s.settings.autoDelay > 0 ? setTimeout(r.startAuto, s.settings.autoDelay) : r.startAuto(),
                        s.settings.autoHover &&
                            r.hover(
                                function () {
                                    s.interval && (r.stopAuto(!0), (s.autoPaused = !0));
                                },
                                function () {
                                    s.autoPaused && (r.startAuto(!0), (s.autoPaused = null));
                                }
                            );
                },
                H = function () {
                    var t = 0;
                    if ("next" == s.settings.autoDirection) r.append(s.children.clone().addClass("bx-clone"));
                    else {
                        r.prepend(s.children.clone().addClass("bx-clone"));
                        var n = s.children.first().position();
                        t = "horizontal" == s.settings.mode ? -n.left : -n.top;
                    }
                    S(t, "reset", 0),
                        (s.settings.pager = !1),
                        (s.settings.controls = !1),
                        (s.settings.autoControls = !1),
                        s.settings.tickerHover &&
                            !s.usingCSS &&
                            s.viewport.hover(
                                function () {
                                    r.stop();
                                },
                                function () {
                                    var t = 0;
                                    s.children.each(function () {
                                        t += "horizontal" == s.settings.mode ? e(this).outerWidth(!0) : e(this).outerHeight(!0);
                                    });
                                    var n = s.settings.speed / t,
                                        i = "horizontal" == s.settings.mode ? "left" : "top",
                                        o = n * (t - Math.abs(parseInt(r.css(i))));
                                    L(o);
                                }
                            ),
                        L();
                },
                L = function (e) {
                    speed = e || s.settings.speed;
                    var t = { left: 0, top: 0 },
                        n = { left: 0, top: 0 };
                    "next" == s.settings.autoDirection ? (t = r.find(".bx-clone").first().position()) : (n = s.children.first().position());
                    var i = "horizontal" == s.settings.mode ? -t.left : -t.top,
                        o = { resetValue: "horizontal" == s.settings.mode ? -n.left : -n.top };
                    S(i, "ticker", speed, o);
                },
                W = function () {
                    (s.touch = { start: { x: 0, y: 0 }, end: { x: 0, y: 0 } }), s.viewport.bind("touchstart", B);
                },
                B = function (e) {
                    if (s.working) e.preventDefault();
                    else {
                        s.touch.originalPos = r.position();
                        var t = e.originalEvent;
                        (s.touch.start.x = t.changedTouches[0].pageX), (s.touch.start.y = t.changedTouches[0].pageY), s.viewport.bind("touchmove", j), s.viewport.bind("touchend", F);
                    }
                },
                j = function (e) {
                    var t = e.originalEvent,
                        n = Math.abs(t.changedTouches[0].pageX - s.touch.start.x),
                        i = Math.abs(t.changedTouches[0].pageY - s.touch.start.y);
                    if ((3 * n > i && s.settings.preventDefaultSwipeX ? e.preventDefault() : 3 * i > n && s.settings.preventDefaultSwipeY && e.preventDefault(), "fade" != s.settings.mode && s.settings.oneToOneTouch)) {
                        var o = 0;
                        if ("horizontal" == s.settings.mode) (r = t.changedTouches[0].pageX - s.touch.start.x), (o = s.touch.originalPos.left + r);
                        else {
                            var r = t.changedTouches[0].pageY - s.touch.start.y;
                            o = s.touch.originalPos.top + r;
                        }
                        S(o, "reset", 0);
                    }
                },
                F = function (e) {
                    s.viewport.unbind("touchmove", j);
                    var t = e.originalEvent,
                        n = 0;
                    if (((s.touch.end.x = t.changedTouches[0].pageX), (s.touch.end.y = t.changedTouches[0].pageY), "fade" == s.settings.mode))
                        (i = Math.abs(s.touch.start.x - s.touch.end.x)) >= s.settings.swipeThreshold && (s.touch.start.x > s.touch.end.x ? r.goToNextSlide() : r.goToPrevSlide(), r.stopAuto());
                    else {
                        var i = 0;
                        "horizontal" == s.settings.mode ? ((i = s.touch.end.x - s.touch.start.x), (n = s.touch.originalPos.left)) : ((i = s.touch.end.y - s.touch.start.y), (n = s.touch.originalPos.top)),
                            !s.settings.infiniteLoop && ((0 == s.active.index && i > 0) || (s.active.last && 0 > i))
                                ? S(n, "reset", 200)
                                : Math.abs(i) >= s.settings.swipeThreshold
                                ? (0 > i ? r.goToNextSlide() : r.goToPrevSlide(), r.stopAuto())
                                : S(n, "reset", 200);
                    }
                    s.viewport.unbind("touchend", F);
                },
                R = function () {
                    var t = e(window).width(),
                        n = e(window).height();
                    (a != t || l != n) && ((a = t), (l = n), r.redrawSlider(), s.settings.onSliderResize.call(r, s.active.index));
                };
            return (
                (r.goToSlide = function (t, n) {
                    if (!s.working && s.active.index != t)
                        if (
                            ((s.working = !0),
                            (s.oldIndex = s.active.index),
                            (s.active.index = 0 > t ? v() - 1 : t >= v() ? 0 : t),
                            s.settings.onSlideBefore(s.children.eq(s.active.index), s.oldIndex, s.active.index),
                            "next" == n ? s.settings.onSlideNext(s.children.eq(s.active.index), s.oldIndex, s.active.index) : "prev" == n && s.settings.onSlidePrev(s.children.eq(s.active.index), s.oldIndex, s.active.index),
                            (s.active.last = s.active.index >= v() - 1),
                            s.settings.pager && P(s.active.index),
                            s.settings.controls && M(),
                            "fade" == s.settings.mode)
                        )
                            s.settings.adaptiveHeight && s.viewport.height() != f() && s.viewport.animate({ height: f() }, s.settings.adaptiveHeightSpeed),
                                s.children.filter(":visible").fadeOut(s.settings.speed).css({ zIndex: 0 }),
                                s.children
                                    .eq(s.active.index)
                                    .css("zIndex", s.settings.slideZIndex + 1)
                                    .fadeIn(s.settings.speed, function () {
                                        e(this).css("zIndex", s.settings.slideZIndex), O();
                                    });
                        else {
                            s.settings.adaptiveHeight && s.viewport.height() != f() && s.viewport.animate({ height: f() }, s.settings.adaptiveHeightSpeed);
                            var i = 0,
                                o = { left: 0, top: 0 };
                            if (!s.settings.infiniteLoop && s.carousel && s.active.last)
                                if ("horizontal" == s.settings.mode) (o = (d = s.children.eq(s.children.length - 1)).position()), (i = s.viewport.width() - d.outerWidth());
                                else {
                                    var a = s.children.length - s.settings.minSlides;
                                    o = s.children.eq(a).position();
                                }
                            else if (s.carousel && s.active.last && "prev" == n) {
                                var l = 1 == s.settings.moveSlides ? s.settings.maxSlides - _() : (v() - 1) * _() - (s.children.length - s.settings.maxSlides),
                                    d = r.children(".bx-clone").eq(l);
                                o = d.position();
                            } else if ("next" == n && 0 == s.active.index) (o = r.find("> .bx-clone").eq(s.settings.maxSlides).position()), (s.active.last = !1);
                            else if (t >= 0) {
                                var c = t * _();
                                o = s.children.eq(c).position();
                            }
                            if (void 0 !== o) {
                                var u = "horizontal" == s.settings.mode ? -(o.left - i) : -o.top;
                                S(u, "slide", s.settings.speed);
                            }
                        }
                }),
                (r.goToNextSlide = function () {
                    if (s.settings.infiniteLoop || !s.active.last) {
                        var e = parseInt(s.active.index) + 1;
                        r.goToSlide(e, "next");
                    }
                }),
                (r.goToPrevSlide = function () {
                    if (s.settings.infiniteLoop || 0 != s.active.index) {
                        var e = parseInt(s.active.index) - 1;
                        r.goToSlide(e, "prev");
                    }
                }),
                (r.startAuto = function (e) {
                    s.interval ||
                        ((s.interval = setInterval(function () {
                            "next" == s.settings.autoDirection ? r.goToNextSlide() : r.goToPrevSlide();
                        }, s.settings.pause)),
                        s.settings.autoControls && 1 != e && N("stop"));
                }),
                (r.stopAuto = function (e) {
                    s.interval && (clearInterval(s.interval), (s.interval = null), s.settings.autoControls && 1 != e && N("start"));
                }),
                (r.getCurrentSlide = function () {
                    return s.active.index;
                }),
                (r.getCurrentSlideElement = function () {
                    return s.children.eq(s.active.index);
                }),
                (r.getSlideCount = function () {
                    return s.children.length;
                }),
                (r.redrawSlider = function () {
                    s.children.add(r.find(".bx-clone")).outerWidth(h()),
                        s.viewport.css("height", f()),
                        s.settings.ticker || y(),
                        s.active.last && (s.active.index = v() - 1),
                        s.active.index >= v() && (s.active.last = !0),
                        s.settings.pager && !s.settings.pagerCustom && (C(), P(s.active.index));
                }),
                (r.destroySlider = function () {
                    s.initialized &&
                        ((s.initialized = !1),
                        e(".bx-clone", this).remove(),
                        s.children.each(function () {
                            null != e(this).data("origStyle") ? e(this).attr("style", e(this).data("origStyle")) : e(this).removeAttr("style");
                        }),
                        null != e(this).data("origStyle") ? this.attr("style", e(this).data("origStyle")) : e(this).removeAttr("style"),
                        e(this).unwrap().unwrap(),
                        s.controls.el && s.controls.el.remove(),
                        s.controls.next && s.controls.next.remove(),
                        s.controls.prev && s.controls.prev.remove(),
                        s.pagerEl && s.settings.controls && s.pagerEl.remove(),
                        e(".bx-caption", this).remove(),
                        s.controls.autoEl && s.controls.autoEl.remove(),
                        clearInterval(s.interval),
                        s.settings.responsive && e(window).unbind("resize", R));
                }),
                (r.reloadSlider = function (e) {
                    null != e && (o = e), r.destroySlider(), d();
                }),
                d(),
                this
            );
        };
    })(jQuery),
    "undefined" == typeof jQuery)
)
    throw new Error("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
!(function (e) {
    var t = jQuery.fn.jquery.split(" ")[0].split(".");
    if ((t[0] < 2 && t[1] < 9) || (1 == t[0] && 9 == t[1] && t[2] < 1) || t[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0");
})(),
    (function () {
        function e(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
        }
        var t,
            n,
            i,
            o,
            s,
            r,
            a,
            l,
            d,
            c,
            u,
            p,
            f,
            g,
            h,
            m,
            v,
            _,
            y,
            S,
            C,
            w,
            b,
            x,
            E,
            I,
            T,
            k,
            A,
            D,
            P,
            O,
            N,
            M,
            z,
            H,
            L,
            W,
            B,
            j,
            F,
            R,
            K,
            q,
            Q,
            U,
            $,
            Z,
            Y,
            V,
            G,
            X,
            J,
            ee,
            te,
            ne,
            ie,
            oe,
            se =
                "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                    ? function (e) {
                          return typeof e;
                      }
                    : function (e) {
                          return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
                      },
            re = (function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var i = t[n];
                        (i.enumerable = i.enumerable || !1), (i.configurable = !0), "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i);
                    }
                }
                return function (t, n, i) {
                    return n && e(t.prototype, n), i && e(t, i), t;
                };
            })(),
            ae =
                ((te = jQuery),
                (ne = !1),
                (ie = { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend" }),
                (oe = {
                    TRANSITION_END: "bsTransitionEnd",
                    getUID: function (e) {
                        do {
                            e += ~~(1e6 * Math.random());
                        } while (document.getElementById(e));
                        return e;
                    },
                    getSelectorFromElement: function (e) {
                        var t = e.getAttribute("data-target");
                        return t || ((t = e.getAttribute("href") || ""), (t = /^#[a-z]/i.test(t) ? t : null)), t;
                    },
                    reflow: function (e) {
                        return e.offsetHeight;
                    },
                    triggerTransitionEnd: function (e) {
                        te(e).trigger(ne.end);
                    },
                    supportsTransitionEnd: function () {
                        return Boolean(ne);
                    },
                    typeCheckConfig: function (e, t, n) {
                        for (var i in n)
                            if (n.hasOwnProperty(i)) {
                                var o = n[i],
                                    s = t[i],
                                    r =
                                        s && ((l = s)[0] || l).nodeType
                                            ? "element"
                                            : ((a = s),
                                              {}.toString
                                                  .call(a)
                                                  .match(/\s([a-zA-Z]+)/)[1]
                                                  .toLowerCase());
                                if (!new RegExp(o).test(r)) throw new Error(e.toUpperCase() + ': Option "' + i + '" provided type "' + r + '" but expected type "' + o + '".');
                            }
                        var a, l;
                    },
                }),
                (ne = (function () {
                    if (window.QUnit) return !1;
                    var e = document.createElement("bootstrap");
                    for (var t in ie) if (void 0 !== e.style[t]) return { end: ie[t] };
                    return !1;
                })()),
                (te.fn.emulateTransitionEnd = function (e) {
                    var t = this,
                        n = !1;
                    return (
                        te(this).one(oe.TRANSITION_END, function () {
                            n = !0;
                        }),
                        setTimeout(function () {
                            n || oe.triggerTransitionEnd(t);
                        }, e),
                        this
                    );
                }),
                oe.supportsTransitionEnd() &&
                    (te.event.special[oe.TRANSITION_END] = {
                        bindType: ne.end,
                        delegateType: ne.end,
                        handle: function (e) {
                            return te(e.target).is(this) ? e.handleObj.handler.apply(this, arguments) : void 0;
                        },
                    }),
                oe);
        (Z = jQuery),
            (Y = "alert"),
            (G = "." + (V = "bs.alert")),
            (X = Z.fn[Y]),
            (J = { CLOSE: "close" + G, CLOSED: "closed" + G, CLICK_DATA_API: "click" + G + ".data-api" }),
            (ee = (function () {
                function t(n) {
                    e(this, t), (this._element = n);
                }
                return (
                    (t.prototype.close = function (e) {
                        e = e || this._element;
                        var t = this._getRootElement(e);
                        this._triggerCloseEvent(t).isDefaultPrevented() || this._removeElement(t);
                    }),
                    (t.prototype.dispose = function () {
                        Z.removeData(this._element, V), (this._element = null);
                    }),
                    (t.prototype._getRootElement = function (e) {
                        var t = ae.getSelectorFromElement(e),
                            n = !1;
                        return t && (n = Z(t)[0]), n || (n = Z(e).closest(".alert")[0]), n;
                    }),
                    (t.prototype._triggerCloseEvent = function (e) {
                        var t = Z.Event(J.CLOSE);
                        return Z(e).trigger(t), t;
                    }),
                    (t.prototype._removeElement = function (e) {
                        var t = this;
                        return (
                            Z(e).removeClass("show"),
                            ae.supportsTransitionEnd() && Z(e).hasClass("fade")
                                ? void Z(e)
                                      .one(ae.TRANSITION_END, function (n) {
                                          return t._destroyElement(e, n);
                                      })
                                      .emulateTransitionEnd(150)
                                : void this._destroyElement(e)
                        );
                    }),
                    (t.prototype._destroyElement = function (e) {
                        Z(e).detach().trigger(J.CLOSED).remove();
                    }),
                    (t._jQueryInterface = function (e) {
                        return this.each(function () {
                            var n = Z(this),
                                i = n.data(V);
                            i || ((i = new t(this)), n.data(V, i)), "close" === e && i[e](this);
                        });
                    }),
                    (t._handleDismiss = function (e) {
                        return function (t) {
                            t && t.preventDefault(), e.close(this);
                        };
                    }),
                    re(t, null, [
                        {
                            key: "VERSION",
                            get: function () {
                                return "4.0.0-alpha.6";
                            },
                        },
                    ]),
                    t
                );
            })()),
            Z(document).on(J.CLICK_DATA_API, '[data-dismiss="alert"]', ee._handleDismiss(new ee())),
            (Z.fn[Y] = ee._jQueryInterface),
            (Z.fn[Y].Constructor = ee),
            (Z.fn[Y].noConflict = function () {
                return (Z.fn[Y] = X), ee._jQueryInterface;
            }),
            (M = jQuery),
            (z = "collapse"),
            (L = "." + (H = "bs.collapse")),
            (W = M.fn[z]),
            (B = { toggle: !0, parent: "" }),
            (j = { toggle: "boolean", parent: "string" }),
            (F = { SHOW: "show" + L, SHOWN: "shown" + L, HIDE: "hide" + L, HIDDEN: "hidden" + L, CLICK_DATA_API: "click" + L + ".data-api" }),
            (R = "show"),
            (K = "collapse"),
            (q = "collapsing"),
            (Q = "collapsed"),
            (U = "width"),
            ($ = (function () {
                function t(n, i) {
                    e(this, t),
                        (this._isTransitioning = !1),
                        (this._element = n),
                        (this._config = this._getConfig(i)),
                        (this._triggerArray = M.makeArray(M('[data-toggle="collapse"][href="#' + n.id + '"],[data-toggle="collapse"][data-target="#' + n.id + '"]'))),
                        (this._parent = this._config.parent ? this._getParent() : null),
                        this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray),
                        this._config.toggle && this.toggle();
                }
                return (
                    (t.prototype.toggle = function () {
                        M(this._element).hasClass(R) ? this.hide() : this.show();
                    }),
                    (t.prototype.show = function () {
                        var e = this;
                        if (this._isTransitioning) throw new Error("Collapse is transitioning");
                        if (!M(this._element).hasClass(R)) {
                            var n = void 0,
                                i = void 0;
                            if ((this._parent && ((n = M.makeArray(M(this._parent).find(".card > .show, .card > .collapsing"))).length || (n = null)), !(n && (i = M(n).data(H)) && i._isTransitioning))) {
                                var o = M.Event(F.SHOW);
                                if ((M(this._element).trigger(o), !o.isDefaultPrevented())) {
                                    n && (t._jQueryInterface.call(M(n), "hide"), i || M(n).data(H, null));
                                    var s = this._getDimension();
                                    M(this._element).removeClass(K).addClass(q),
                                        (this._element.style[s] = 0),
                                        this._element.setAttribute("aria-expanded", !0),
                                        this._triggerArray.length && M(this._triggerArray).removeClass(Q).attr("aria-expanded", !0),
                                        this.setTransitioning(!0);
                                    var r = function () {
                                        M(e._element).removeClass(q).addClass(K).addClass(R), (e._element.style[s] = ""), e.setTransitioning(!1), M(e._element).trigger(F.SHOWN);
                                    };
                                    if (!ae.supportsTransitionEnd()) return void r();
                                    var a = "scroll" + (s[0].toUpperCase() + s.slice(1));
                                    M(this._element).one(ae.TRANSITION_END, r).emulateTransitionEnd(600), (this._element.style[s] = this._element[a] + "px");
                                }
                            }
                        }
                    }),
                    (t.prototype.hide = function () {
                        var e = this;
                        if (this._isTransitioning) throw new Error("Collapse is transitioning");
                        if (M(this._element).hasClass(R)) {
                            var t = M.Event(F.HIDE);
                            if ((M(this._element).trigger(t), !t.isDefaultPrevented())) {
                                var n = this._getDimension(),
                                    i = n === U ? "offsetWidth" : "offsetHeight";
                                (this._element.style[n] = this._element[i] + "px"),
                                    ae.reflow(this._element),
                                    M(this._element).addClass(q).removeClass(K).removeClass(R),
                                    this._element.setAttribute("aria-expanded", !1),
                                    this._triggerArray.length && M(this._triggerArray).addClass(Q).attr("aria-expanded", !1),
                                    this.setTransitioning(!0);
                                var o = function () {
                                    e.setTransitioning(!1), M(e._element).removeClass(q).addClass(K).trigger(F.HIDDEN);
                                };
                                return (this._element.style[n] = ""), ae.supportsTransitionEnd() ? void M(this._element).one(ae.TRANSITION_END, o).emulateTransitionEnd(600) : void o();
                            }
                        }
                    }),
                    (t.prototype.setTransitioning = function (e) {
                        this._isTransitioning = e;
                    }),
                    (t.prototype.dispose = function () {
                        M.removeData(this._element, H), (this._config = null), (this._parent = null), (this._element = null), (this._triggerArray = null), (this._isTransitioning = null);
                    }),
                    (t.prototype._getConfig = function (e) {
                        return ((e = M.extend({}, B, e)).toggle = Boolean(e.toggle)), ae.typeCheckConfig(z, e, j), e;
                    }),
                    (t.prototype._getDimension = function () {
                        return M(this._element).hasClass(U) ? U : "height";
                    }),
                    (t.prototype._getParent = function () {
                        var e = this,
                            n = M(this._config.parent)[0],
                            i = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]';
                        return (
                            M(n)
                                .find(i)
                                .each(function (n, i) {
                                    e._addAriaAndCollapsedClass(t._getTargetFromElement(i), [i]);
                                }),
                            n
                        );
                    }),
                    (t.prototype._addAriaAndCollapsedClass = function (e, t) {
                        if (e) {
                            var n = M(e).hasClass(R);
                            e.setAttribute("aria-expanded", n), t.length && M(t).toggleClass(Q, !n).attr("aria-expanded", n);
                        }
                    }),
                    (t._getTargetFromElement = function (e) {
                        var t = ae.getSelectorFromElement(e);
                        return t ? M(t)[0] : null;
                    }),
                    (t._jQueryInterface = function (e) {
                        return this.each(function () {
                            var n = M(this),
                                i = n.data(H),
                                o = M.extend({}, B, n.data(), "object" === (void 0 === e ? "undefined" : se(e)) && e);
                            if ((!i && o.toggle && /show|hide/.test(e) && (o.toggle = !1), i || ((i = new t(this, o)), n.data(H, i)), "string" == typeof e)) {
                                if (void 0 === i[e]) throw new Error('No method named "' + e + '"');
                                i[e]();
                            }
                        });
                    }),
                    re(t, null, [
                        {
                            key: "VERSION",
                            get: function () {
                                return "4.0.0-alpha.6";
                            },
                        },
                        {
                            key: "Default",
                            get: function () {
                                return B;
                            },
                        },
                    ]),
                    t
                );
            })()),
            M(document).on(F.CLICK_DATA_API, '[data-toggle="collapse"]', function (e) {
                e.preventDefault();
                var t = $._getTargetFromElement(this),
                    n = M(t).data(H) ? "toggle" : M(this).data();
                $._jQueryInterface.call(M(t), n);
            }),
            (M.fn[z] = $._jQueryInterface),
            (M.fn[z].Constructor = $),
            (M.fn[z].noConflict = function () {
                return (M.fn[z] = W), $._jQueryInterface;
            }),
            (b = jQuery),
            (x = "dropdown"),
            (I = "." + (E = "bs.dropdown")),
            (T = ".data-api"),
            (k = b.fn[x]),
            (A = { HIDE: "hide" + I, HIDDEN: "hidden" + I, SHOW: "show" + I, SHOWN: "shown" + I, CLICK: "click" + I, CLICK_DATA_API: "click" + I + T, FOCUSIN_DATA_API: "focusin" + I + T, KEYDOWN_DATA_API: "keydown" + I + T }),
            (D = "disabled"),
            (P = "show"),
            (O = '[data-toggle="dropdown"]'),
            (N = (function () {
                function t(n) {
                    e(this, t), (this._element = n), this._addEventListeners();
                }
                return (
                    (t.prototype.toggle = function () {
                        if (this.disabled || b(this).hasClass(D)) return !1;
                        var e = t._getParentFromElement(this),
                            n = b(e).hasClass(P);
                        if ((t._clearMenus(), n)) return !1;
                        if ("ontouchstart" in document.documentElement && !b(e).closest(".navbar-nav").length) {
                            var i = document.createElement("div");
                            (i.className = "dropdown-backdrop"), b(i).insertBefore(this), b(i).on("click", t._clearMenus);
                        }
                        var o = { relatedTarget: this },
                            s = b.Event(A.SHOW, o);
                        return b(e).trigger(s), !s.isDefaultPrevented() && (this.focus(), this.setAttribute("aria-expanded", !0), b(e).toggleClass(P), b(e).trigger(b.Event(A.SHOWN, o)), !1);
                    }),
                    (t.prototype.dispose = function () {
                        b.removeData(this._element, E), b(this._element).off(I), (this._element = null);
                    }),
                    (t.prototype._addEventListeners = function () {
                        b(this._element).on(A.CLICK, this.toggle);
                    }),
                    (t._jQueryInterface = function (e) {
                        return this.each(function () {
                            var n = b(this).data(E);
                            if ((n || ((n = new t(this)), b(this).data(E, n)), "string" == typeof e)) {
                                if (void 0 === n[e]) throw new Error('No method named "' + e + '"');
                                n[e].call(this);
                            }
                        });
                    }),
                    (t._clearMenus = function (e) {
                        if (!e || 3 !== e.which) {
                            var n = b(".dropdown-backdrop")[0];
                            n && n.parentNode.removeChild(n);
                            for (var i = b.makeArray(b(O)), o = 0; o < i.length; o++) {
                                var s = t._getParentFromElement(i[o]),
                                    r = { relatedTarget: i[o] };
                                if (b(s).hasClass(P) && !(e && (("click" === e.type && /input|textarea/i.test(e.target.tagName)) || "focusin" === e.type) && b.contains(s, e.target))) {
                                    var a = b.Event(A.HIDE, r);
                                    b(s).trigger(a), a.isDefaultPrevented() || (i[o].setAttribute("aria-expanded", "false"), b(s).removeClass(P).trigger(b.Event(A.HIDDEN, r)));
                                }
                            }
                        }
                    }),
                    (t._getParentFromElement = function (e) {
                        var t = void 0,
                            n = ae.getSelectorFromElement(e);
                        return n && (t = b(n)[0]), t || e.parentNode;
                    }),
                    (t._dataApiKeydownHandler = function (e) {
                        if (/(38|40|27|32)/.test(e.which) && !/input|textarea/i.test(e.target.tagName) && (e.preventDefault(), e.stopPropagation(), !this.disabled && !b(this).hasClass(D))) {
                            var n = t._getParentFromElement(this),
                                i = b(n).hasClass(P);
                            if ((!i && 27 !== e.which) || (i && 27 === e.which)) {
                                if (27 === e.which) {
                                    var o = b(n).find(O)[0];
                                    b(o).trigger("focus");
                                }
                                return void b(this).trigger("click");
                            }
                            var s = b(n).find('[role="menu"] li:not(.disabled) a, [role="listbox"] li:not(.disabled) a').get();
                            if (s.length) {
                                var r = s.indexOf(e.target);
                                38 === e.which && r > 0 && r--, 40 === e.which && r < s.length - 1 && r++, 0 > r && (r = 0), s[r].focus();
                            }
                        }
                    }),
                    re(t, null, [
                        {
                            key: "VERSION",
                            get: function () {
                                return "4.0.0-alpha.6";
                            },
                        },
                    ]),
                    t
                );
            })()),
            b(document)
                .on(A.KEYDOWN_DATA_API, O, N._dataApiKeydownHandler)
                .on(A.KEYDOWN_DATA_API, '[role="menu"]', N._dataApiKeydownHandler)
                .on(A.KEYDOWN_DATA_API, '[role="listbox"]', N._dataApiKeydownHandler)
                .on(A.CLICK_DATA_API + " " + A.FOCUSIN_DATA_API, N._clearMenus)
                .on(A.CLICK_DATA_API, O, N.prototype.toggle)
                .on(A.CLICK_DATA_API, ".dropdown form", function (e) {
                    e.stopPropagation();
                }),
            (b.fn[x] = N._jQueryInterface),
            (b.fn[x].Constructor = N),
            (b.fn[x].noConflict = function () {
                return (b.fn[x] = k), N._jQueryInterface;
            }),
            (c = jQuery),
            (u = "modal"),
            (f = "." + (p = "bs.modal")),
            (g = c.fn[u]),
            (h = { backdrop: !0, keyboard: !0, focus: !0, show: !0 }),
            (m = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean" }),
            (v = {
                HIDE: "hide" + f,
                HIDDEN: "hidden" + f,
                SHOW: "show" + f,
                SHOWN: "shown" + f,
                FOCUSIN: "focusin" + f,
                RESIZE: "resize" + f,
                CLICK_DISMISS: "click.dismiss" + f,
                KEYDOWN_DISMISS: "keydown.dismiss" + f,
                MOUSEUP_DISMISS: "mouseup.dismiss" + f,
                MOUSEDOWN_DISMISS: "mousedown.dismiss" + f,
                CLICK_DATA_API: "click" + f + ".data-api",
            }),
            (_ = "modal-open"),
            (y = "fade"),
            (S = "show"),
            (C = { DIALOG: ".modal-dialog", DATA_TOGGLE: '[data-toggle="modal"]', DATA_DISMISS: '[data-dismiss="modal"]', FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top" }),
            (w = (function () {
                function t(n, i) {
                    e(this, t),
                        (this._config = this._getConfig(i)),
                        (this._element = n),
                        (this._dialog = c(n).find(C.DIALOG)[0]),
                        (this._backdrop = null),
                        (this._isShown = !1),
                        (this._isBodyOverflowing = !1),
                        (this._ignoreBackdropClick = !1),
                        (this._isTransitioning = !1),
                        (this._originalBodyPadding = 0),
                        (this._scrollbarWidth = 0);
                }
                return (
                    (t.prototype.toggle = function (e) {
                        return this._isShown ? this.hide() : this.show(e);
                    }),
                    (t.prototype.show = function (e) {
                        var t = this;
                        if (this._isTransitioning) throw new Error("Modal is transitioning");
                        ae.supportsTransitionEnd() && c(this._element).hasClass(y) && (this._isTransitioning = !0);
                        var n = c.Event(v.SHOW, { relatedTarget: e });
                        c(this._element).trigger(n),
                            this._isShown ||
                                n.isDefaultPrevented() ||
                                ((this._isShown = !0),
                                this._checkScrollbar(),
                                this._setScrollbar(),
                                c(document.body).addClass(_),
                                this._setEscapeEvent(),
                                this._setResizeEvent(),
                                c(this._element).on(v.CLICK_DISMISS, C.DATA_DISMISS, function (e) {
                                    return t.hide(e);
                                }),
                                c(this._dialog).on(v.MOUSEDOWN_DISMISS, function () {
                                    c(t._element).one(v.MOUSEUP_DISMISS, function (e) {
                                        c(e.target).is(t._element) && (t._ignoreBackdropClick = !0);
                                    });
                                }),
                                this._showBackdrop(function () {
                                    return t._showElement(e);
                                }));
                    }),
                    (t.prototype.hide = function (e) {
                        var t = this;
                        if ((e && e.preventDefault(), this._isTransitioning)) throw new Error("Modal is transitioning");
                        var n = ae.supportsTransitionEnd() && c(this._element).hasClass(y);
                        n && (this._isTransitioning = !0);
                        var i = c.Event(v.HIDE);
                        c(this._element).trigger(i),
                            this._isShown &&
                                !i.isDefaultPrevented() &&
                                ((this._isShown = !1),
                                this._setEscapeEvent(),
                                this._setResizeEvent(),
                                c(document).off(v.FOCUSIN),
                                c(this._element).removeClass(S),
                                c(this._element).off(v.CLICK_DISMISS),
                                c(this._dialog).off(v.MOUSEDOWN_DISMISS),
                                n
                                    ? c(this._element)
                                          .one(ae.TRANSITION_END, function (e) {
                                              return t._hideModal(e);
                                          })
                                          .emulateTransitionEnd(300)
                                    : this._hideModal());
                    }),
                    (t.prototype.dispose = function () {
                        c.removeData(this._element, p),
                            c(window, document, this._element, this._backdrop).off(f),
                            (this._config = null),
                            (this._element = null),
                            (this._dialog = null),
                            (this._backdrop = null),
                            (this._isShown = null),
                            (this._isBodyOverflowing = null),
                            (this._ignoreBackdropClick = null),
                            (this._originalBodyPadding = null),
                            (this._scrollbarWidth = null);
                    }),
                    (t.prototype._getConfig = function (e) {
                        return (e = c.extend({}, h, e)), ae.typeCheckConfig(u, e, m), e;
                    }),
                    (t.prototype._showElement = function (e) {
                        var t = this,
                            n = ae.supportsTransitionEnd() && c(this._element).hasClass(y);
                        (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE) || document.body.appendChild(this._element),
                            (this._element.style.display = "block"),
                            this._element.removeAttribute("aria-hidden"),
                            (this._element.scrollTop = 0),
                            n && ae.reflow(this._element),
                            c(this._element).addClass(S),
                            this._config.focus && this._enforceFocus();
                        var i = c.Event(v.SHOWN, { relatedTarget: e }),
                            o = function () {
                                t._config.focus && t._element.focus(), (t._isTransitioning = !1), c(t._element).trigger(i);
                            };
                        n ? c(this._dialog).one(ae.TRANSITION_END, o).emulateTransitionEnd(300) : o();
                    }),
                    (t.prototype._enforceFocus = function () {
                        var e = this;
                        c(document)
                            .off(v.FOCUSIN)
                            .on(v.FOCUSIN, function (t) {
                                document === t.target || e._element === t.target || c(e._element).has(t.target).length || e._element.focus();
                            });
                    }),
                    (t.prototype._setEscapeEvent = function () {
                        var e = this;
                        this._isShown && this._config.keyboard
                            ? c(this._element).on(v.KEYDOWN_DISMISS, function (t) {
                                  27 === t.which && e.hide();
                              })
                            : this._isShown || c(this._element).off(v.KEYDOWN_DISMISS);
                    }),
                    (t.prototype._setResizeEvent = function () {
                        var e = this;
                        this._isShown
                            ? c(window).on(v.RESIZE, function (t) {
                                  return e._handleUpdate(t);
                              })
                            : c(window).off(v.RESIZE);
                    }),
                    (t.prototype._hideModal = function () {
                        var e = this;
                        (this._element.style.display = "none"),
                            this._element.setAttribute("aria-hidden", "true"),
                            (this._isTransitioning = !1),
                            this._showBackdrop(function () {
                                c(document.body).removeClass(_), e._resetAdjustments(), e._resetScrollbar(), c(e._element).trigger(v.HIDDEN);
                            });
                    }),
                    (t.prototype._removeBackdrop = function () {
                        this._backdrop && (c(this._backdrop).remove(), (this._backdrop = null));
                    }),
                    (t.prototype._showBackdrop = function (e) {
                        var t = this,
                            n = c(this._element).hasClass(y) ? y : "";
                        if (this._isShown && this._config.backdrop) {
                            var i = ae.supportsTransitionEnd() && n;
                            if (
                                ((this._backdrop = document.createElement("div")),
                                (this._backdrop.className = "modal-backdrop"),
                                n && c(this._backdrop).addClass(n),
                                c(this._backdrop).appendTo(document.body),
                                c(this._element).on(v.CLICK_DISMISS, function (e) {
                                    return t._ignoreBackdropClick ? void (t._ignoreBackdropClick = !1) : void (e.target === e.currentTarget && ("static" === t._config.backdrop ? t._element.focus() : t.hide()));
                                }),
                                i && ae.reflow(this._backdrop),
                                c(this._backdrop).addClass(S),
                                !e)
                            )
                                return;
                            if (!i) return void e();
                            c(this._backdrop).one(ae.TRANSITION_END, e).emulateTransitionEnd(150);
                        } else if (!this._isShown && this._backdrop) {
                            c(this._backdrop).removeClass(S);
                            var o = function () {
                                t._removeBackdrop(), e && e();
                            };
                            ae.supportsTransitionEnd() && c(this._element).hasClass(y) ? c(this._backdrop).one(ae.TRANSITION_END, o).emulateTransitionEnd(150) : o();
                        } else e && e();
                    }),
                    (t.prototype._handleUpdate = function () {
                        this._adjustDialog();
                    }),
                    (t.prototype._adjustDialog = function () {
                        var e = this._element.scrollHeight > document.documentElement.clientHeight;
                        !this._isBodyOverflowing && e && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !e && (this._element.style.paddingRight = this._scrollbarWidth + "px");
                    }),
                    (t.prototype._resetAdjustments = function () {
                        (this._element.style.paddingLeft = ""), (this._element.style.paddingRight = "");
                    }),
                    (t.prototype._checkScrollbar = function () {
                        (this._isBodyOverflowing = document.body.clientWidth < window.innerWidth), (this._scrollbarWidth = this._getScrollbarWidth());
                    }),
                    (t.prototype._setScrollbar = function () {
                        var e = parseInt(c(C.FIXED_CONTENT).css("padding-right") || 0, 10);
                        (this._originalBodyPadding = document.body.style.paddingRight || ""), this._isBodyOverflowing && (document.body.style.paddingRight = e + this._scrollbarWidth + "px");
                    }),
                    (t.prototype._resetScrollbar = function () {
                        document.body.style.paddingRight = this._originalBodyPadding;
                    }),
                    (t.prototype._getScrollbarWidth = function () {
                        var e = document.createElement("div");
                        (e.className = "modal-scrollbar-measure"), document.body.appendChild(e);
                        var t = e.offsetWidth - e.clientWidth;
                        return document.body.removeChild(e), t;
                    }),
                    (t._jQueryInterface = function (e, n) {
                        return this.each(function () {
                            var i = c(this).data(p),
                                o = c.extend({}, t.Default, c(this).data(), "object" === (void 0 === e ? "undefined" : se(e)) && e);
                            if ((i || ((i = new t(this, o)), c(this).data(p, i)), "string" == typeof e)) {
                                if (void 0 === i[e]) throw new Error('No method named "' + e + '"');
                                i[e](n);
                            } else o.show && i.show(n);
                        });
                    }),
                    re(t, null, [
                        {
                            key: "VERSION",
                            get: function () {
                                return "4.0.0-alpha.6";
                            },
                        },
                        {
                            key: "Default",
                            get: function () {
                                return h;
                            },
                        },
                    ]),
                    t
                );
            })()),
            c(document).on(v.CLICK_DATA_API, C.DATA_TOGGLE, function (e) {
                var t = this,
                    n = void 0,
                    i = ae.getSelectorFromElement(this);
                i && (n = c(i)[0]);
                var o = c(n).data(p) ? "toggle" : c.extend({}, c(n).data(), c(this).data());
                ("A" === this.tagName || "AREA" === this.tagName) && e.preventDefault();
                var s = c(n).one(v.SHOW, function (e) {
                    e.isDefaultPrevented() ||
                        s.one(v.HIDDEN, function () {
                            c(t).is(":visible") && t.focus();
                        });
                });
                w._jQueryInterface.call(c(n), o, this);
            }),
            (c.fn[u] = w._jQueryInterface),
            (c.fn[u].Constructor = w),
            (c.fn[u].noConflict = function () {
                return (c.fn[u] = g), w._jQueryInterface;
            }),
            (t = jQuery),
            (i = "." + (n = "bs.tab")),
            (o = t.fn.tab),
            (s = { HIDE: "hide" + i, HIDDEN: "hidden" + i, SHOW: "show" + i, SHOWN: "shown" + i, CLICK_DATA_API: "click" + i + ".data-api" }),
            (r = "active"),
            (a = "fade"),
            (l = "show"),
            (d = (function () {
                function i(t) {
                    e(this, i), (this._element = t);
                }
                return (
                    (i.prototype.show = function () {
                        var e = this;
                        if (!((this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && t(this._element).hasClass(r)) || t(this._element).hasClass("disabled"))) {
                            var n = void 0,
                                i = void 0,
                                o = t(this._element).closest("ul:not(.dropdown-menu), ol:not(.dropdown-menu), nav:not(.dropdown-menu)")[0],
                                a = ae.getSelectorFromElement(this._element);
                            o && (i = (i = t.makeArray(t(o).find(".active")))[i.length - 1]);
                            var l = t.Event(s.HIDE, { relatedTarget: this._element }),
                                d = t.Event(s.SHOW, { relatedTarget: i });
                            if ((i && t(i).trigger(l), t(this._element).trigger(d), !d.isDefaultPrevented() && !l.isDefaultPrevented())) {
                                a && (n = t(a)[0]), this._activate(this._element, o);
                                var c = function () {
                                    var n = t.Event(s.HIDDEN, { relatedTarget: e._element }),
                                        o = t.Event(s.SHOWN, { relatedTarget: i });
                                    t(i).trigger(n), t(e._element).trigger(o);
                                };
                                n ? this._activate(n, n.parentNode, c) : c();
                            }
                        }
                    }),
                    (i.prototype.dispose = function () {
                        t.removeClass(this._element, n), (this._element = null);
                    }),
                    (i.prototype._activate = function (e, n, i) {
                        var o = this,
                            s = t(n).find("> .nav-item > .active, > .active")[0],
                            r = i && ae.supportsTransitionEnd() && ((s && t(s).hasClass(a)) || Boolean(t(n).find("> .nav-item .fade, > .fade")[0])),
                            d = function () {
                                return o._transitionComplete(e, s, r, i);
                            };
                        s && r ? t(s).one(ae.TRANSITION_END, d).emulateTransitionEnd(150) : d(), s && t(s).removeClass(l);
                    }),
                    (i.prototype._transitionComplete = function (e, n, i, o) {
                        if (n) {
                            t(n).removeClass(r);
                            var s = t(n.parentNode).find("> .dropdown-menu .active")[0];
                            s && t(s).removeClass(r), n.setAttribute("aria-expanded", !1);
                        }
                        if ((t(e).addClass(r), e.setAttribute("aria-expanded", !0), i ? (ae.reflow(e), t(e).addClass(l)) : t(e).removeClass(a), e.parentNode && t(e.parentNode).hasClass("dropdown-menu"))) {
                            var d = t(e).closest(".dropdown")[0];
                            d && t(d).find(".dropdown-toggle").addClass(r), e.setAttribute("aria-expanded", !0);
                        }
                        o && o();
                    }),
                    (i._jQueryInterface = function (e) {
                        return this.each(function () {
                            var o = t(this),
                                s = o.data(n);
                            if ((s || ((s = new i(this)), o.data(n, s)), "string" == typeof e)) {
                                if (void 0 === s[e]) throw new Error('No method named "' + e + '"');
                                s[e]();
                            }
                        });
                    }),
                    re(i, null, [
                        {
                            key: "VERSION",
                            get: function () {
                                return "4.0.0-alpha.6";
                            },
                        },
                    ]),
                    i
                );
            })()),
            t(document).on(s.CLICK_DATA_API, '[data-toggle="tab"], [data-toggle="pill"]', function (e) {
                e.preventDefault(), d._jQueryInterface.call(t(this), "show");
            }),
            (t.fn.tab = d._jQueryInterface),
            (t.fn.tab.Constructor = d),
            (t.fn.tab.noConflict = function () {
                return (t.fn.tab = o), d._jQueryInterface;
            });
    })(),
    $(document).ready(function () {
        $(".navbar-nav>li.dropdown>a").on("click", function (e) {
            e.preventDefault(), $(".navbar-nav>li.dropdown>a").not($(this)).parent().removeClass("open"), $(this).parent().toggleClass("open");
        }),
            $(".dropdown-menu>li.dropdown>a").on("click", function (e) {
                e.preventDefault(), $(this).parent().toggleClass("open");
            }),
            $("body").on("click", function (e) {
                $(".navbar.flyout").is(e.target) || 0 !== $(".navbar.flyout").has(e.target).length || 0 !== $(".navbar.flyout").has(e.target).length || $(".navbar.flyout .navbar-collapse").removeClass("show");
                $("li.dropdown").is(e.target) || 0 !== $("li.dropdown").has(e.target).length || 0 !== $(".open").has(e.target).length || $("li").removeClass("open");
            });
    }),
    $(".cards .acard").on("click", function () {
        var e = $("<div/>").append($(this).clone()).html();
        $(".switch .acard").replaceWith(e);
    }),
    $(".accordions>.accordion>h3").on("click", function () {
        $(this).parent().toggleClass("open");
    });
