var groups = [];
var agents = [];

$(document).ready(() => {
    setInterval(() => {
        getAgentsApi()
    }, 3000);
})

function getAgentsApi() {
    $.getJSON("/rnd-efs/api.php?cmd=listAgents", (result) => {
        if(result.status) {
            let new_groups = result.datas.groups
            let new_agents = result.datas.agents

            new_groups.forEach( new_group => {
                console.log(typeof groups)
                if(typeof groups[new_group.ID] == "undefined") {
                    fetchGroups(new_group)
                    groups[new_group.ID] = new_group;
                }


                let exists = [];
                console.log(agents)
                new_agents[new_group.ID].forEach(new_agent => {
                    let findagent = agents[new_group.ID]?.find(({ ID }) => ID === new_agent.ID);
                    console.log(findagent)
                    if(typeof findagent == "undefined") {
                        agents[new_group.ID] = []
                        agents[new_group.ID].push(new_agent)
                        $(`#table-${new_group.ID}`)
                        .html(`
                            <tr id="row-${new_group.ID}-${new_agent.ID}">
                            <td>${new_agent.ID}. ${new_agent.AgentName}</td>
                            <td><span class="badge badge-pill badge-light">${new_agent.CallDuration}</span></td>
                            <td>${new_agent.CustName}</td>
                            </tr>
                        `)
                    }

                    exists[new_agent.JidON] = new_agent
                });

                agents[new_group.ID]?.forEach((agent, index) => {

                    const indexExists = typeof exists[agent.JidON];
                    console.log(exists[agent.JidON])
                    console.log(indexExists)

                    console.log(index)
                    if (indexExists == "undefined") {
                        agents[new_group.ID]?.splice(index, 1);
                        $(`#row-${agent.ID}-${agent.ID}`).remove()
                    }

                    console.log(agents[new_group.ID])
                });
            });
        }
    })
}

function fetchGroups(new_group) {
    let result = `
    <div class="col-lg-3 col-6" id='group-${new_group.ID}'>
      <!-- Widget:user widget style 1 -->
      <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-img" style="background: url('../images/photo1.png') center center;"
          data-overlay="5">
          <h3 class="widget-user-username text-white">${new_group.ID}</h3>
          <h6 class="widget-user-desc text-white">${new_group.Description}</h6>
          <div class="badge badge-pill badge-success font-size-16" data-toggle="tooltip" data-placement="top"
            title="" data-original-title="3 more">10</div>
        </div>
        <div class="widget-user-image">
          <img class="no-border" src="logo.png" alt="user Avatar">
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-12">

              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="table-responsive">
                  <table class="table mb-2">
                    <tr>
                      <td width="40%">users</td>
                      <td width="20%">Calls</td>
                      <td width="40%">Customer</td>

                    </tr>
                  </table>
                  <div id="containerxx">
                    <div id="div1">
                      <table class="table table-hover no-border" id="table-${new_group.ID}"></table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.widget-user -->
    </div>`;

    $('#row-groups').prepend(result)
}