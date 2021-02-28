#!/usr/bin/env python
import gtk
import webkit
import gobject

gobject.threads_init()
#gobject.title("Demo")

win = gtk.Window()
bro = webkit.WebView()
bro.open("http://localhost/www.itv.net/stream/APP/")
win.add(bro)
win.show_all()
gtk.main()


