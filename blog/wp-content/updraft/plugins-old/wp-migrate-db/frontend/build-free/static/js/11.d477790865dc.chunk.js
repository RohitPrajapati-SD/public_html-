(this.webpackJSONPwpmdb=this.webpackJSONPwpmdb||[]).push([[11],{826:function(e,t,i){"use strict";i.r(t),i.d(t,"MSBlurb",function(){return ue}),i.d(t,"MSContent",function(){return pe});var a,n,s,r,l,c,o=i(37),u=i(0),p=i.n(u),b=i(20),m=i.n(b),d=i(7),f=i(15),g=i.n(f),w=i(1),h=i(40),O=i(10),C=i(105),v=i(78),j=i(230),E=function(e){var t=e.action,i=e.subsites,a=e.value,n=e.type,s="wpmdb-".concat(n,"-multisite-selector"),r=Object(d.d)();return p.a.createElement("div",null,p.a.createElement("select",{onChange:function(e){if("0"!==e.target.value){r({type:t,payload:e.target.value});var a=Object(j.b)(e.target.value,i);if(!a.subsiteName)return!1;r(Object(C.a)({selectedSubsite:a.subsiteName,selectedSubsiteID:e.target.value,type:n}))}},value:a,id:s,"aria-label":"".concat(n," multisite")},p.a.createElement("option",{value:"0"},"-- ",Object(w.a)("Select a subsite","wp-migrate-db")," --"),Object.keys(i).map(function(e,t){return p.a.createElement("option",{value:e,key:t},Object.values(i)[t])})))},L=i(115),y=function(e){var t=Object(d.e)(function(e){return e.migrations}),i=Object(d.e)(function(e){return e.multisite_tools}),a=t.current_migration.intent,n=Object(d.d)(),s=e.newPrefix;return"savefile"===a&&(s=p.a.createElement(p.a.Fragment,null,p.a.createElement("input",{type:"text",className:"new-prefix-input",value:i.new_prefix,onChange:function(e){var t=e.target.value;n({type:v.b,payload:t})}}))),p.a.createElement("div",{className:"new-prefix".concat("savefile"===a?" has-form":"")},p.a.createElement("span",null,Object(w.a)("Exported table prefix: ")),s)},_=i(129),k=i.n(_),R=i(18),S=function(e){var t=function(e){var t=[],i=k()(e,{name:"MST_NO_SUBSITE"}),a=k()(e,{name:"MST_NO_DESTINATION"}),n=k()(e,{name:"MST_EMPTY_PREFIX"}),s=k()(e,{name:"MST_INVALID_PREFIX"});return(n||s)&&t.push(p.a.createElement("p",null,Object(w.a)("Please enter a valid prefix. Letters, numbers and underscores (_) are allowed.","wp-migrate-db"))),i&&t.push(p.a.createElement("p",null,Object(w.a)("Please select a subsite.","wp-migrate-db"))),a&&t.push(p.a.createElement("p",null,Object(w.a)("Please select a destination subsite.","wp-migrate-db"))),t}(e.status);return 0===t.length?null:p.a.createElement(R.a,{type:"danger",className:"mst-errors"},t.map(function(e,t){return p.a.createElement(p.a.Fragment,{key:t},e)}))},M=function(e){var t=e.hasTablePrefix,i=Object(d.e)(function(e){return e.migrations}),a=Object(d.e)(function(e){return e.multisite_tools}),n=i.current_migration,s=n.status,r=n.twoMultisites,l=Object(j.a)(i),c=l.sourceSite,o=l.destinationSite,u=r?"subsite-to-subsite":"subsite-to-single",b="false"===c.site_details.is_multisite?o:c;return p.a.createElement("div",{className:"subsites-row ".concat(u)},p.a.createElement("div",{className:"subsites-selects"},p.a.createElement(E,{type:"source",subsites:b.site_details.subsites,action:v.g,value:a.selected_subsite}),r&&p.a.createElement(p.a.Fragment,null,p.a.createElement("div",{className:"subsite-arrow"},p.a.createElement(L.a,null)),p.a.createElement(E,{type:"destination",subsites:o.site_details.subsites,action:v.f,value:a.destination_subsite}))),t&&p.a.createElement(y,null),p.a.createElement(S,{status:s}))},N=Object(w.c)(Object(w.a)('This option requires manually <a href="%s" target="_blank" rel="noreferrer noopener">updating the destination\'s wp-config.php</a> to work as a multisite install.',"wp-migrate-db"),"https://deliciousbrains.com/wp-migrate-db-pro/doc/multisite-tools-addon/#replace-single-site-multisite"),P=Object(w.c)(Object(w.a)('This option requires manually <a href="%s" target="_blank" rel="noreferrer noopener">updating the destination\'s wp-config.php</a> to work as a single site.',"wp-migrate-db"),"https://deliciousbrains.com/wp-migrate-db-pro/doc/multisite-tools-addon/#replace-multisite-single-site"),V={subSub:{push:{1:{description:Object(w.a)("Push network to network"),postDescription:Object(w.a)("Replaces the entire multisite network with the other network","wp-migrate-db"),value:!1},2:{description:Object(w.a)("Push subsite to subsite"),postDescription:Object(w.a)("Replaces the subsite of one multisite network with the subsite of the other network","wp-migrate-db"),value:!0}},pull:{1:{description:Object(w.a)("Pull network to network"),postDescription:Object(w.a)("Replaces the entire multisite network with the other network","wp-migrate-db"),value:!1},2:{description:Object(w.a)("Pull subsite to subsite","wp-migrate-db"),postDescription:Object(w.a)("Replaces the subsite of one multisite network with the subsite of the other network","wp-migrate-db"),value:!0}}},subSingle:{push:{1:{description:Object(w.a)("Push subsite to single site","wp-migrate-db"),postDescription:Object(w.a)("Replaces the single site with the selected subsite of the multisite network","wp-migrate-db"),value:!0},2:{description:Object(w.a)("Push network and replace single site","wp-migrate-db"),postDescription:Object(w.a)("Replaces the single site with the entire multisite network","wp-migrate-db"),value:!1,warning:N}},pull:{1:{description:Object(w.a)("Pull subsite to single site","wp-migrate-db"),postDescription:Object(w.a)("Replaces the single site with the selected subsite of the multisite network","wp-migrate-db"),value:!0},2:{description:Object(w.a)("Pull network and replace single site","wp-migrate-db"),postDescription:Object(w.a)("Replaces the single site with the entire multisite network","wp-migrate-db"),value:!1,warning:N}}},singleSub:{push:{1:{description:Object(w.a)("Push single site to subsite","wp-migrate-db"),postDescription:Object(w.a)("Replaces the selected subsite of the multisite network with the single site","wp-migrate-db"),value:!0},2:{description:Object(w.a)("Push single site and replace network","wp-migrate-db"),postDescription:Object(w.a)("Replaces the entire multisite network with the single site","wp-migrate-db"),value:!1,warning:P}},pull:{1:{description:Object(w.a)("Pull single site to subsite","wp-migrate-db"),postDescription:Object(w.a)("Replaces the selected subsite of the multisite network with the single site","wp-migrate-db"),value:!0},2:{description:Object(w.a)("Pull single site and replace network","wp-migrate-db"),postDescription:Object(w.a)("Replaces the entire multisite network with the single site","wp-migrate-db"),value:!1,warning:P}}},savefile:{savefile:{1:{description:Object(w.a)("Export network","wp-migrate-db"),postDescription:Object(w.a)("Export the entire multisite network","wp-migrate-db"),value:!1},2:{description:Object(w.a)("Export subsite","wp-migrate-db"),postDescription:Object(w.a)("Export a subsite of the multisite network","wp-migrate-db"),value:!0}}},find_replace:{find_replace:{1:{description:Object(w.a)("Find & Replace across network","wp-migrate-db"),postDescription:Object(w.a)("Run Find & Replace across the entire multisite network","wp-migrate-db"),value:!1},2:{description:Object(w.a)("Find & Replace within subsite","wp-migrate-db"),postDescription:Object(w.a)("Run Find & Replace within the subsite of the multisite network","wp-migrate-db"),value:!0}}}},x=function(e){var t=e.selected,i=e.labelledby;return p.a.createElement("div",null,p.a.createElement("input",{readOnly:!0,className:"option-radio",type:"radio",name:"multisite-option",checked:t,"aria-labelledby":i}))},D=function(e){var t=e.description,i=e.currentOption,a=e.intent,n=e.optionName,s=e.postDescription,r=e.warning,l=e.className,c=Object(d.d)(),o="multisite-".concat(n),u="savefile"===a&&n,b=n===i;return p.a.createElement("div",{onClick:function(){!function(e){if(i===e)return null;c(Object(C.h)())}(n)},className:"option ".concat(l||"")},p.a.createElement(x,{labelledby:o,selected:b}),p.a.createElement("div",null,p.a.createElement("div",{id:o,className:"label"},t),p.a.createElement("div",{className:"option-description"},s)),n&&b&&p.a.createElement(M,{hasTablePrefix:u}),r&&b&&p.a.createElement("div",{className:"migration-warning"},p.a.createElement(R.a,{type:"warning"},g()(r))))},H=function(e){var t=e.enabled,i=e.intent,a=e.migrationType;return p.a.createElement("fieldset",{className:"boxed-options"},Object.entries(V[a][i]).map(function(e){var a=Object(O.a)(e,2),n=a[0],s=a[1];return p.a.createElement(D,{key:"multisite-option-".concat(n),description:s.description,currentOption:t,intent:i,optionName:s.value,postDescription:s.postDescription,warning:s.warning,className:"multisite-selection"})}))},T=["svgRef"];function Z(){return(Z=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var i=arguments[t];for(var a in i)Object.prototype.hasOwnProperty.call(i,a)&&(e[a]=i[a])}return e}).apply(this,arguments)}function I(e,t){if(null==e)return{};var i,a,n=function(e,t){if(null==e)return{};var i,a,n={},s=Object.keys(e);for(a=0;a<s.length;a++)i=s[a],t.indexOf(i)>=0||(n[i]=e[i]);return n}(e,t);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(e);for(a=0;a<s.length;a++)i=s[a],t.indexOf(i)>=0||Object.prototype.propertyIsEnumerable.call(e,i)&&(n[i]=e[i])}return n}var F,U,B=function(e){var t=e.svgRef,i=I(e,T);return p.a.createElement("svg",Z({width:25,height:21,viewBox:"0 0 25 21",fill:"none",ref:t},i),a||(a=p.a.createElement("path",{d:"M1.23969 14.3084L5.85791 10.568C5.94467 10.4931 6.07736 10.4931 6.16923 10.568L10.7874 14.3049C11.0988 14.5596 11.5632 14.5141 11.8235 14.2095C11.8235 14.1995 11.8286 14.1945 11.8337 14.1895C12.094 13.8649 12.0429 13.3955 11.7214 13.1308L7.10267 9.38951C6.45962 8.87016 5.53537 8.87016 4.89742 9.38951L0.280221 13.1253C-0.0464073 13.385 -0.0923394 13.8544 0.167943 14.179C0.418017 14.4886 0.918167 14.5531 1.23969 14.3084Z",fill:"#666666",fillOpacity:.3})),n||(n=p.a.createElement("path",{d:"M11.2636 20.0062V16.5106C11.2533 16.206 11.115 15.9164 10.8854 15.7166L6.64941 12.221C6.28196 11.9164 5.74098 11.9164 5.37352 12.221L1.13756 15.7166C0.902797 15.9164 0.770105 16.201 0.759898 16.5056V20.0012H0.754794C0.744587 20.5456 1.1937 20.99 1.74999 21H4.49571C4.7713 20.995 4.99586 20.7703 4.99076 20.5006V17.7541C4.98565 17.4794 5.21021 17.2547 5.4858 17.2547H6.481C6.75659 17.2547 6.98115 17.4794 6.97604 17.7541V20.5006C6.97094 20.7703 7.1955 20.995 7.47109 21H10.2168C10.7731 20.99 11.2687 20.5506 11.2636 20.0062Z",fill:"#666666",fillOpacity:.3})),s||(s=p.a.createElement("path",{d:"M14.2397 14.3084L18.8579 10.568C18.9447 10.4931 19.0774 10.4931 19.1692 10.568L23.7874 14.3049C24.0988 14.5596 24.5632 14.5141 24.8235 14.2095C24.8235 14.1995 24.8286 14.1945 24.8337 14.1895C25.094 13.8649 25.0429 13.3955 24.7214 13.1308L20.1027 9.38951C19.4596 8.87016 18.5354 8.87016 17.8974 9.38951L13.2802 13.1253C12.9536 13.385 12.9077 13.8544 13.1679 14.179C13.418 14.4886 13.9182 14.5531 14.2397 14.3084Z",fill:"#666666"})),r||(r=p.a.createElement("path",{d:"M24.2636 20.0062V16.5106C24.2533 16.206 24.115 15.9164 23.8854 15.7166L19.6494 12.221C19.282 11.9164 18.741 11.9164 18.3735 12.221L14.1376 15.7166C13.9028 15.9164 13.7701 16.201 13.7599 16.5056V20.0012C13.7497 20.5456 14.1937 20.99 14.75 21H17.4957C17.7713 20.995 17.9959 20.7703 17.9908 20.5006V17.7541C17.9857 17.4794 18.2102 17.2547 18.4858 17.2547H19.481C19.7566 17.2547 19.9811 17.4794 19.976 17.7541V20.5006C19.9709 20.7703 20.1955 20.995 20.4711 21H23.2168C23.7731 20.99 24.2687 20.5506 24.2636 20.0062Z",fill:"#666666"})),l||(l=p.a.createElement("path",{d:"M7.73969 5.30836L12.3579 1.56804C12.4447 1.49313 12.5774 1.49313 12.6692 1.56804L17.2874 5.30487C17.5988 5.55955 18.0632 5.51411 18.3235 5.20949C18.3235 5.1995 18.3286 5.19451 18.3337 5.18951C18.594 4.86492 18.5429 4.39551 18.2214 4.13084L13.6027 0.389513C12.9596 -0.129838 12.0354 -0.129838 11.3974 0.389513L6.78022 4.12534C6.45359 4.38502 6.40766 4.85443 6.66794 5.17903C6.91802 5.48864 7.41817 5.55306 7.73969 5.30836C7.73969 5.30836 7.73969 5.30836 7.71417 5.28889L7.73969 5.30836Z",fill:"#666666",fillOpacity:.3})),c||(c=p.a.createElement("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M17.3755 6.71659C17.5979 6.91005 17.7347 7.18783 17.7523 7.48188L17.7537 7.48188L17.7531 7.49624L17.7537 7.51059L17.7523 7.51059C17.7347 7.80464 17.5979 8.08243 17.3755 8.27589L13.1395 11.7715C12.7721 12.0761 12.2311 12.0761 11.8636 11.7715L7.62766 8.27589C7.39772 8.08024 7.2657 7.80314 7.25078 7.5056L7.25 7.5056L7.25035 7.49624L7.25 7.48688L7.25078 7.48688C7.2657 7.18934 7.39772 6.91224 7.62766 6.71659L11.8636 3.22096C12.2311 2.91634 12.7721 2.91634 13.1395 3.22096L17.3755 6.71659ZM12 6.99998C11.7239 6.99998 11.5 7.22384 11.5 7.49998V9.49998C11.5 9.77613 11.7239 9.99998 12 9.99998H13C13.2761 9.99998 13.5 9.77613 13.5 9.49998V7.49998C13.5 7.22384 13.2761 6.99998 13 6.99998H12Z",fill:"#666666",fillOpacity:.3})))},q=p.a.forwardRef(function(e,t){return p.a.createElement(B,Z({svgRef:t},e))}),A=(i.p,["svgRef"]);function J(){return(J=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var i=arguments[t];for(var a in i)Object.prototype.hasOwnProperty.call(i,a)&&(e[a]=i[a])}return e}).apply(this,arguments)}function X(e,t){if(null==e)return{};var i,a,n=function(e,t){if(null==e)return{};var i,a,n={},s=Object.keys(e);for(a=0;a<s.length;a++)i=s[a],t.indexOf(i)>=0||(n[i]=e[i]);return n}(e,t);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(e);for(a=0;a<s.length;a++)i=s[a],t.indexOf(i)>=0||Object.prototype.propertyIsEnumerable.call(e,i)&&(n[i]=e[i])}return n}var Y,z,G,K,Q,W,$=function(e){var t=e.svgRef,i=X(e,A);return p.a.createElement("svg",J({width:14,height:21,viewBox:"0 0 14 21",fill:"none",ref:t},i),F||(F=p.a.createElement("path",{d:"M1.44631 9.19309L6.83422 4.82938C6.93544 4.74199 7.09025 4.74199 7.19742 4.82938L12.5853 9.18901C12.9485 9.48614 13.4904 9.43312 13.794 9.07773C13.794 9.06608 13.8 9.06025 13.8059 9.05443C14.1096 8.67573 14.0501 8.12808 13.6749 7.8193L8.28644 3.45443C7.53622 2.84852 6.45792 2.84852 5.71365 3.45443L0.326924 7.8129C-0.0541417 8.11585 -0.107729 8.6635 0.195933 9.04219C0.487686 9.40341 1.07119 9.47856 1.44631 9.19309Z",fill:"#666666"})),U||(U=p.a.createElement("path",{d:"M13.1408 15.8406V11.7624C13.1289 11.407 12.9676 11.0691 12.6996 10.836L7.75769 6.75781C7.32899 6.40242 6.69785 6.40242 6.26915 6.75781L1.3272 10.836C1.05331 11.0691 0.898502 11.4012 0.886594 11.7566V15.8348C0.874686 16.4698 1.3927 16.9883 2.0417 17H5.24504C5.56656 16.9942 5.82854 16.732 5.82259 16.4174V13.2131C5.81663 12.8926 6.07862 12.6305 6.40014 12.6305H7.5612C7.88273 12.6305 8.14471 12.8926 8.13876 13.2131V16.4174C8.1328 16.732 8.39478 16.9942 8.71631 17H11.9196C12.5686 16.9883 13.1468 16.4757 13.1408 15.8406Z",fill:"#666666"})))},ee=p.a.forwardRef(function(e,t){return p.a.createElement($,J({svgRef:t},e))}),te=(i.p,["svgRef"]);function ie(){return(ie=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var i=arguments[t];for(var a in i)Object.prototype.hasOwnProperty.call(i,a)&&(e[a]=i[a])}return e}).apply(this,arguments)}function ae(e,t){if(null==e)return{};var i,a,n=function(e,t){if(null==e)return{};var i,a,n={},s=Object.keys(e);for(a=0;a<s.length;a++)i=s[a],t.indexOf(i)>=0||(n[i]=e[i]);return n}(e,t);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(e);for(a=0;a<s.length;a++)i=s[a],t.indexOf(i)>=0||Object.prototype.propertyIsEnumerable.call(e,i)&&(n[i]=e[i])}return n}var ne=function(e){var t=e.svgRef,i=ae(e,te);return p.a.createElement("svg",ie({width:25,height:21,viewBox:"0 0 25 21",fill:"none",ref:t},i),Y||(Y=p.a.createElement("path",{d:"M1.23969 14.3084L5.85791 10.568C5.94467 10.4931 6.07736 10.4931 6.16923 10.568L10.7874 14.3049C11.0988 14.5596 11.5632 14.5141 11.8235 14.2095C11.8235 14.1995 11.8286 14.1945 11.8337 14.1895C12.094 13.8649 12.0429 13.3955 11.7214 13.1308L7.10267 9.38951C6.45962 8.87016 5.53537 8.87016 4.89742 9.38951L0.280221 13.1253C-0.0464073 13.385 -0.0923394 13.8544 0.167943 14.179C0.418017 14.4886 0.918167 14.5531 1.23969 14.3084Z",fill:"#666666"})),z||(z=p.a.createElement("path",{d:"M11.2636 20.0062V16.5106C11.2533 16.206 11.115 15.9164 10.8854 15.7166L6.64942 12.221C6.28196 11.9164 5.74098 11.9164 5.37352 12.221L1.13756 15.7166C0.902799 15.9164 0.770106 16.201 0.759899 16.5056V20.0012H0.754796C0.744589 20.5456 1.1937 20.99 1.74999 21H4.49571C4.7713 20.995 4.99586 20.7703 4.99076 20.5006V17.7541C4.98565 17.4794 5.21021 17.2547 5.4858 17.2547H6.481C6.75659 17.2547 6.98115 17.4794 6.97604 17.7541V20.5006C6.97094 20.7703 7.1955 20.995 7.47109 21H10.2168C10.7731 20.99 11.2687 20.5506 11.2636 20.0062Z",fill:"#666666"})),G||(G=p.a.createElement("path",{d:"M14.2397 14.3084L18.8579 10.568C18.9447 10.4931 19.0774 10.4931 19.1692 10.568L23.7874 14.3049C24.0988 14.5596 24.5632 14.5141 24.8235 14.2095C24.8235 14.1995 24.8286 14.1945 24.8337 14.1895C25.094 13.8649 25.0429 13.3955 24.7214 13.1308L20.1027 9.38951C19.4596 8.87016 18.5354 8.87016 17.8974 9.38951L13.2802 13.1253C12.9536 13.385 12.9077 13.8544 13.1679 14.179C13.418 14.4886 13.9182 14.5531 14.2397 14.3084Z",fill:"#666666"})),K||(K=p.a.createElement("path",{d:"M24.2636 20.0062V16.5106C24.2533 16.206 24.115 15.9164 23.8854 15.7166L19.6494 12.221C19.282 11.9164 18.741 11.9164 18.3735 12.221L14.1376 15.7166C13.9028 15.9164 13.7701 16.201 13.7599 16.5056V20.0012C13.7497 20.5456 14.1937 20.99 14.75 21H17.4957C17.7713 20.995 17.9959 20.7703 17.9908 20.5006V17.7541C17.9857 17.4794 18.2102 17.2547 18.4858 17.2547H19.481C19.7566 17.2547 19.9811 17.4794 19.976 17.7541V20.5006C19.9709 20.7703 20.1955 20.995 20.4711 21H23.2168C23.7731 20.99 24.2687 20.5506 24.2636 20.0062Z",fill:"#666666"})),Q||(Q=p.a.createElement("path",{d:"M7.73969 5.30836L12.3579 1.56804C12.4447 1.49313 12.5774 1.49313 12.6692 1.56804L17.2874 5.30487C17.5988 5.55955 18.0632 5.51411 18.3235 5.20949C18.3235 5.1995 18.3286 5.19451 18.3337 5.18951C18.594 4.86492 18.5429 4.39551 18.2214 4.13084L13.6027 0.389513C12.9596 -0.129838 12.0354 -0.129838 11.3974 0.389513L6.78022 4.12534C6.45359 4.38502 6.40766 4.85443 6.66794 5.17903C6.91802 5.48864 7.41817 5.55306 7.73969 5.30836C7.73969 5.30836 7.73969 5.30836 7.71417 5.28889L7.73969 5.30836Z",fill:"#666666"})),W||(W=p.a.createElement("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M17.3755 6.71659C17.5979 6.91005 17.7347 7.18783 17.7523 7.48188L17.7537 7.48188L17.7531 7.49624L17.7537 7.51059L17.7523 7.51059C17.7347 7.80464 17.5979 8.08243 17.3755 8.27589L13.1395 11.7715C12.7721 12.0761 12.2311 12.0761 11.8636 11.7715L7.62766 8.27589C7.39772 8.08024 7.2657 7.80314 7.25078 7.5056L7.25 7.5056L7.25035 7.49624L7.25 7.48688L7.25078 7.48688C7.2657 7.18934 7.39772 6.91224 7.62766 6.71659L11.8636 3.22096C12.2311 2.91634 12.7721 2.91634 13.1395 3.22096L17.3755 6.71659ZM12 6.99998C11.7239 6.99998 11.5 7.22384 11.5 7.49998V9.49998C11.5 9.77613 11.7239 9.99998 12 9.99998H13C13.2761 9.99998 13.5 9.77613 13.5 9.49998V7.49998C13.5 7.22384 13.2761 6.99998 13 6.99998H12Z",fill:"#666666"})))},se=p.a.forwardRef(function(e,t){return p.a.createElement(ne,ie({svgRef:t},e))}),re=(i.p,function(e){var t=e.isMultisite,i=e.enabled;return"false"===t?p.a.createElement(ee,{"aria-label":Object(w.a)("Single site","wp-migrate-db")}):i?p.a.createElement(q,{"aria-label":Object(w.a)("Subsite","wp-migrate-db")}):p.a.createElement(se,{"aria-label":Object(w.a)("Multisite","wp-migrate-db")})}),le=function(){var e=Object(d.e)(function(e){return e}),t=e.multisite_tools,i=e.migrations,a=e.panels.panelsOpen,n=i.current_migration,s=Object(j.a)(i),r=s.sourceSite,l=s.destinationSite,c=n.intent,o=n.twoMultisites;if(m()(a,"multisite_tools"))return null;if(!m()(["push","pull"],c)){var u=t.enabled?Object(j.c)(t.selected_subsite,r):r.url;return p.a.createElement("div",{className:"mst-site-summary"},p.a.createElement(re,{isMultisite:r.is_multisite,enabled:t.enabled}),p.a.createElement("span",{className:"source-site"},u))}var b=r.url,f=l.url;if(t.enabled){var g="false"===r.site_details.is_multisite?t.destination_subsite:t.selected_subsite,w=o||"true"!==l.site_details.is_multisite?t.destination_subsite:t.selected_subsite;b=Object(j.c)(g,r),f=Object(j.c)(w,l)}return p.a.createElement("div",{className:"mst-site-summary"},p.a.createElement(re,{isMultisite:r.site_details.is_multisite,enabled:t.enabled}),p.a.createElement("span",{className:"source-site"},b),p.a.createElement(L.a,{"aria-label":"migrating to"}),p.a.createElement(re,{isMultisite:l.site_details.is_multisite,enabled:t.enabled}),p.a.createElement("span",{className:"destination-site"},f))},ce=(i(632),i(5)),oe=["localURL","remoteURL","localIsMultisite","localSource","twoMultisites","migrationType"],ue=function(e){var t=e.localURL,i=e.remoteURL,a=(e.localIsMultisite,e.localSource),n=(e.twoMultisites,e.migrationType),s=Object(o.a)(e,oe),r="";switch(n){case"subSub":r=Object(w.a)("The source <b>(%s)</b> and destination <b>(%s)</b> are both multisite installs.","wp-migrate-db");break;case"singleSub":r=Object(w.a)("The source <b>(%s)</b> is a single-site install, but the destination <b>(%s)</b> is a multisite install.","wp-migrate-db");break;case"subSingle":r=Object(w.a)("The source <b>(%s)</b> is a multisite install, but the destination <b>(%s)</b> is a single-site install.","wp-migrate-db")}var l=a?t:i,c=a?i:t,u=Object(w.c)(r,Object(ce.r)(l),Object(ce.r)(c));return p.a.createElement("p",{className:s.className},g()(u))},pe=function(){var e=Object(d.e)(function(e){return e.migrations}),t=Object(d.e)(function(e){return e.multisite_tools}),i=e.current_migration,a=e.local_site,n=e.remote_site,s=i.intent,r=i.twoMultisites,l=i.localSource,c=function(){var e=l?a:n;return m()(["push","pull"],s)?r?"subSub":"true"===e.site_details.is_multisite?"subSingle":"singleSub":s};return p.a.createElement(p.a.Fragment,null,["push","pull"].includes(s)&&p.a.createElement(ue,{localURL:a.this_url,remoteURL:n.site_details.home_url,localIsMultisite:"true"===a.is_multisite,twoMultisites:r,localSource:l,migrationType:c(),className:"mst-blurb"}),p.a.createElement(H,{enabled:t.enabled,intent:s,migrationType:c()}))};t.default=function(){var e=!1;return Object(d.e)(function(e){return e.panels.panelsOpen}).includes("multisite_tools")||(e=!0),p.a.createElement(h.a,{title:Object(w.a)("Multisite","wp-migrate-db"),className:"mst",forceDivider:e,panelName:"multisite_tools",disabled:!1,panelSummary:p.a.createElement(le,{disabled:!1})},p.a.createElement(pe,null))}}}]);