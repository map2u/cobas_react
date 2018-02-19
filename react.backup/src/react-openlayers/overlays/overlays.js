/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import * as React from 'react';


export class Overlays extends React.Component<any, any> {
  constructor(props) {
    super(props);
   
  }
  render() {
    return (<div>{this.props.children}</div>);
  }
}

