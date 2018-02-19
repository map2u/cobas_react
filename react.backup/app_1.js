/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Object.defineProperty(exports, "__esModule", {
//  value: true
//});

import React, { Component } from 'react';
import {render} from 'react-dom';

import { Map2uFloatingPanel } from './src/react-feature-attributes/Map2uFloatingPanel';

//import {Interactions,Layers,Overlays,Controls,layer,control,custom,interaction,Map,Overlay,Util}  from './src/react-openlayers/index';

        import { Map2uLeftsidebar } from './js/sidebar';
        import { Map2uNavbar } from './src/Map2uNavbar';
        import {Map2uOl3map} from './js/ol3map';
     //   import {RSidebarPane} from './react-rightsidebar/index';
        var Redux = require('redux');
        var ReactRedux = require('react-redux');
        var createStore = Redux.createStore;
        var Provider = ReactRedux.Provider;
        var connect = ReactRedux.connect;

        var _reactRedux = require('react-redux');
        var _reactBootstrap = require('react-bootstrap');
        var _reactBootstrap2 = _interopRequireDefault(_reactBootstrap);
        var _reactMap2uOl3map = require('./js/ol3map');
        var _reactMap2uOl3map2 = _interopRequireDefault(_reactMap2uOl3map);
var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);
        
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * src/containers/Container.jsx
 * Author: H.Alper Tuna <halpertuna@gmail.com>
 * Date: 16.09.2016
 */

var mapStateToProps = function mapStateToProps(store, ownProps) {
        return {
        //    items: store[ownProps.reduxStoreName].content[ownProps.reduxUid].filter(function (item) {
        //      return item.parentId === ownProps.itemId;
        //    })
        };
 };
//exports.default = (0, _reactRedux.connect)(mapStateToProps)(_reactBootstrap2.default);
class App extends Component {
       constructor(props) {
            super(props);
            this.state = {
              menuSpanVisibility: false,
              showFeatureAttributes: true,
              rightSidebarCollapsed: false,
              ol3mapSidebarCollapsed: true
             }; 
            this.handleFrameUpdate = this.handleFrameUpdate.bind(this);
        };
        handleFrameUpdate(options) {
            if(typeof options !=='undefined' && typeof options.menuSpanVisibility !=='undefined') {
                this.state.menuSpanVisibility=options.menuSpanVisibility;
            }
            console.log("leftsidebarCollapsed 0=" + this.state.menuSpanVisibility);
            console.log("showFeatureAttributes 0=" + this.state.showFeatureAttributes);
            console.log("rightSidebarCollapsed 0=" + this.state.rightSidebarCollapsed);
            console.log("ol3mapSidebarCollapsed 0=" + this.state.ol3mapSidebarCollapsed);
            console.log("\n");
            
        };
  
        render() {
          return( <div>
                <div id="header-wrapper">
                    <Map2uNavbar   handleFrameUpdate={this.handleFrameUpdate.bind(this)}/>
                </div>
              
                <div id="leftsidebar-wrapper">
                    <Map2uLeftsidebar menuSpanVisibility={this.state.menuSpanVisibility}  handleFrameUpdate={this.handleFrameUpdate.bind(this)}/>
                </div>
                
             
                <div id="page-wrapper">
                    <Map2uOl3map  handleFrameUpdate={this.handleFrameUpdate.bind(this)}/>
                </div>
                <div id="rightsidebar-wrapper">
                 </div>
                <Map2uFloatingPanel/>
            </div>);
        }
};

App.defaultProps = {
  menuSpanVisibility: false,
  showFeatureAttributes: false,
  rightSidebarCollapsed: false,
  ol3mapSidebarCollapsed: true
};

App.propTypes = {
  menuSpanVisibility: _propTypes2.default.bool.isRequired,
  showFeatureAttributes: _propTypes2.default.bool.isRequired,
  rightSidebarCollapsed: _propTypes2.default.bool.isRequired,
  ol3mapSidebarCollapsed: _propTypes2.default.bool.isRequired,
  handleFrameUpdate: _propTypes2.default.func
 // reduxStoreName: _propTypes2.default.string.isRequired,
//  reduxUid: _propTypes2.default.number.isRequired
};

App.contextTypes = {
 // classStore: _propTypes2.default.object.isRequired
};

render(<App />, document.getElementById("wrapper"));

export default App;