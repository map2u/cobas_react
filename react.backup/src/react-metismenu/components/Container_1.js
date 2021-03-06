'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; /**
                                                                                                                                                                                                                                                                   * src/components/Container.jsx
                                                                                                                                                                                                                                                                   * Author: H.Alper Tuna <halpertuna@gmail.com>
                                                                                                                                                                                                                                                                   * Date: 16.09.2016
                                                                                                                                                                                                                                                                   */

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);

var _classnames = require('classnames');

var _classnames2 = _interopRequireDefault(_classnames);

var _Item = require('../containers/Item');

var _Item2 = _interopRequireDefault(_Item);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var Container = function Container(_ref, _ref2) {
    
  var items = _ref.items,
      visible = _ref.visible,
      itemId = _ref.itemId,
      menuSpanVisibility = _ref.menuSpanVisibility,
      handleFrameUpdate = _ref.handleFrameUpdate,
      reduxStoreName = _ref.reduxStoreName,
      reduxUid = _ref.reduxUid;
  var classStore = _ref2.classStore;
 
  return  _react2.default.createElement(
    'ul',
    {
      className: (0, _classnames2.default)(typeof classStore.classContainer === 'function' ? classStore.classContainer({ itemId: itemId, visible: visible, menuSpanVisibility: menuSpanVisibility,handleFrameUpdate: handleFrameUpdate,items: items }) : classStore.classContainer, menuSpanVisibility?'collapsed':'',visible && classStore.classContainerVisible)
    },
    items.map(function (item, i) {
        return _react2.default.createElement(_Item2.default, _extends({ key: item.id || '_' + i, reduxStoreName: reduxStoreName, menuSpanVisibility: menuSpanVisibility,handleFrameUpdate: handleFrameUpdate,reduxUid: reduxUid }, item));
     })
     
  );
};

Container.defaultProps = {
  itemId: null,
  visible: false,
  menuSpanVisibility: false,
  handleFrameUpdate: null
};

Container.propTypes = {
  itemId: _propTypes2.default.number,
  items: _propTypes2.default.arrayOf(_propTypes2.default.object).isRequired,
  visible: _propTypes2.default.bool,
  menuSpanVisibility: _propTypes2.default.bool.isRequired,
  handleFrameUpdate: _propTypes2.default.func,
  reduxStoreName: _propTypes2.default.string.isRequired,
  reduxUid: _propTypes2.default.number.isRequired
};

Container.contextTypes = {
  classStore: _propTypes2.default.object.isRequired
};

exports.default = Container;