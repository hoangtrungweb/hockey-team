google.maps.__gjsload__('overlay', function(_){var gz=_.na("b"),hz=_.ma(),iz=function(){var a=this.rf;if(this.getPanes()){if(this.getProjection()){if(!a.b&&this.onAdd)this.onAdd();a.b=!0;this.draw()}}else{if(a.b)if(this.onRemove)this.onRemove();else this.remove();a.b=!1}},jz=function(a){a.rf=a.rf||new hz;return a.rf},kz=function(a){_.gg.call(this);this.$=(0,_.p)(iz,a)};_.t(gz,_.A);
gz.prototype.changed=function(a){"outProjection"!=a&&(a=!!(this.get("offset")&&this.get("projectionTopLeft")&&this.get("projection")&&_.kb(this.get("zoom"))),a==!this.get("outProjection")&&this.set("outProjection",a?this.b:null))};_.t(kz,_.gg);_.Wc("overlay",{Yj:function(a){var b=a.getMap(),c=jz(a),d=c.$l;c.$l=b;d&&(c=jz(a),(d=c.X)&&d.unbindAll(),(d=c.Ch)&&d.unbindAll(),a.unbindAll(),a.set("panes",null),a.set("projection",null),_.v(c.P,_.y.removeListener),c.P=null,c.ee&&(c.ee.$(),c.ee=null),_.ln("Ox","-p",a));if(b){c=jz(a);d=c.ee;d||(d=c.ee=new kz(a));_.v(c.P||[],_.y.removeListener);var e=c.X=c.X||new _.Nk,f=b.__gm;e.bindTo("zoom",f);e.bindTo("offset",f);e.bindTo("center",f,"projectionCenterQ");e.bindTo("projection",b);e.bindTo("projectionTopLeft",
f);e=c.Ch=c.Ch||new gz(e);e.bindTo("zoom",f);e.bindTo("offset",f);e.bindTo("projection",b);e.bindTo("projectionTopLeft",f);a.bindTo("projection",e,"outProjection");a.bindTo("panes",f);e=(0,_.p)(d.K,d);c.P=[_.y.addListener(a,"panes_changed",e),_.y.addListener(f,"zoom_changed",e),_.y.addListener(f,"offset_changed",e),_.y.addListener(b,"projection_changed",e),_.y.addListener(f,"projectioncenterq_changed",e),_.y.forward(b,"forceredraw",d)];d.K();b instanceof _.me&&(_.hn(b,"Ox"),_.kn("Ox","-p",a,!!b.U))}}});});