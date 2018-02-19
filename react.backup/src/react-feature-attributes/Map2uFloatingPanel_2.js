/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import React from 'react';
import  { ReactPanels } from '../react-panels/index';


var FloatingPanel = ReactPanels.FloatingPanel;
var Tab = ReactPanels.Tab;
var Content = ReactPanels.Content;
var Footer = ReactPanels.Footer;
var TabWrapperMixin = ReactPanels.TabWrapper;
var Toolbar = ReactPanels.Toolbar;

var Panel = ReactPanels.Panel;

var Map2uFloatingPanel = React.createClass({
  render: function () {
    return (
      <Panel theme="chemical">
        <Tab title="One" icon="fa fa-plane">
          <Toolbar>Toolbar content of One</Toolbar>
          <Content>Content of One</Content>
          <Footer>Footer content of One</Footer>
        </Tab>
        <Tab title="Two" icon="fa fa-fire">
          <Content>Content of Two</Content>
        </Tab>
      </Panel>
    );
  }
});

export { Map2uFloatingPanel }