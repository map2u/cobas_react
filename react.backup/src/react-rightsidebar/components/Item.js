'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);

var _classnames = require('classnames');

var _classnames2 = _interopRequireDefault(_classnames);

var _Container = require('../containers/Container');

var _Container2 = _interopRequireDefault(_Container);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * src/components/Container.jsx
 * Author: H.Alper Tuna <halpertuna@gmail.com>
 * Date: 16.09.2016
 */

var Item = function Item(_ref, _ref2) {
  var id = _ref.id,
      icon = _ref.icon,
      label = _ref.label,
      isCollapseButton = _ref.isCollapseButton,
   
      to = _ref.to,
      externalLink = _ref.externalLink,
      hasSubMenu = _ref.hasSubMenu,
      active = _ref.active,
      hasActiveChild = _ref.hasActiveChild,
      subMenuVisibility = _ref.subMenuVisibility,
      toggleSubMenu = _ref.toggleSubMenu,
      toggleMenuSpan = _ref.toggleMenuSpan,
      menuSpanVisibility= _ref.menuSpanVisibility,

      activateMe = _ref.activateMe,
      reduxStoreName = _ref.reduxStoreName,
      reduxUid = _ref.reduxUid;
      console.log("menuSpanVisibility 2=" + menuSpanVisibility);  
      var classStore = _ref2.classStore,
          
      LinkComponent = _ref2.LinkComponent;
     // menuSpanVisibility=classStore.menuSpanVisibility;
      
   if(typeof isCollapseButton !=='undefined'&& isCollapseButton===true) {
       return _react2.default.createElement('li',{className:"metismenu-item",  onClick: toggleMenuSpan },_react2.default.createElement('a',{className:"metismenu-link hidden-xs sidebar-toggle",'data-toggle':'collapse'},_react2.default.createElement('i',{className:(0, _classnames2.default)('metismenu-icon fa fa-fw ',menuSpanVisibility?'fa-angle-double-left':'fa-angle-double-right')}),_react2.default.createElement('span',{className:(0, _classnames2.default)('content',menuSpanVisibility?'':'hidden')},'Collapse Menu')));
   }   
   else {
       
    return _react2.default.createElement(
    'li',
    {
      className: (0, _classnames2.default)(classStore.classItem, active && classStore.classItemActive, hasActiveChild && classStore.classItemHasActiveChild, hasSubMenu && subMenuVisibility && classStore.classItemHasVisibleChild)
    },
    _react2.default.createElement(
      LinkComponent,
      {
        className: classStore.classLink,
        classNameActive: classStore.classLinkActive,
        classNameHasActiveChild: classStore.classLinkHasActiveChild,
        active: active,
        hasActiveChild: hasActiveChild,
        id: id,
        to: to,
        
        isCollapseButton: isCollapseButton,
        toggleMenuSpan: toggleMenuSpan,
        label: label,
        externalLink: externalLink,
        hasSubMenu: hasSubMenu,
        toggleSubMenu: toggleSubMenu,
        activateMe: activateMe
      },
      _react2.default.createElement('i', { className: (0, _classnames2.default)(classStore.classIcon, classStore.iconNamePrefix + icon) }),
      _react2.default.createElement('span',{className:(0, _classnames2.default)('content',menuSpanVisibility?'':'hidden')},label),
      hasSubMenu && menuSpanVisibility && _react2.default.createElement('span',{className: (0, _classnames2.default)(menuSpanVisibility?'':'hidden')},_react2.default.createElement('i', {
        className: (0, _classnames2.default)(classStore.classStateIcon, classStore.iconNamePrefix + (subMenuVisibility ? classStore.iconNameStateVisible : classStore.iconNameStateHidden))
      }))
    ),
    hasSubMenu && menuSpanVisibility && _react2.default.createElement(_Container2.default, {
      itemId: id,
      visible: subMenuVisibility,
      reduxStoreName: reduxStoreName,
      reduxUid: reduxUid
    })
  );
   }
};

Item.defaultProps = {
  icon: '',
  label: '',
  isCollapseButton: false,
  to: null,
  externalLink: false,
  menuSpanVisibility: null,
  toggleSubMenu: null,
  toggleMenuSpan: null
};

Item.propTypes = {
  id: _propTypes2.default.oneOfType([_propTypes2.default.number, _propTypes2.default.string]).isRequired,
  icon: _propTypes2.default.string,
  label: _propTypes2.default.oneOfType([_propTypes2.default.element, _propTypes2.default.array, _propTypes2.default.string]),
  to: _propTypes2.default.string,
  isCollapseButton: _propTypes2.default.bool,
  menuSpanVisibility: _propTypes2.default.bool,
  externalLink: _propTypes2.default.bool,
  hasSubMenu: _propTypes2.default.bool.isRequired,
  active: _propTypes2.default.bool.isRequired,
  hasActiveChild: _propTypes2.default.bool.isRequired,
  subMenuVisibility: _propTypes2.default.bool.isRequired,
  toggleSubMenu: _propTypes2.default.func,
  toggleMenuSpan: _propTypes2.default.func,
  activateMe: _propTypes2.default.func.isRequired,
  reduxStoreName: _propTypes2.default.string.isRequired,
  reduxUid: _propTypes2.default.number.isRequired
};

Item.contextTypes = {
  classStore: _propTypes2.default.object.isRequired,
  LinkComponent: _propTypes2.default.oneOfType([_propTypes2.default.element, _propTypes2.default.func]).isRequired
};

exports.default = Item;